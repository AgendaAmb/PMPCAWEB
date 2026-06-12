document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-tesis-toggle]').forEach(function (toggle) {
        var contentId = toggle.getAttribute('aria-controls');
        var content = contentId ? document.getElementById(contentId) : null;

        if (! content) {
            return;
        }

        toggle.addEventListener('click', function () {
            var expanded = toggle.getAttribute('aria-expanded') === 'true';

            toggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
            content.classList.toggle('is-collapsed', expanded);
        });
    });

    var adminConfig = window.PMPCA_ADMIN;

    if (! adminConfig) {
        return;
    }

    var panels = document.querySelectorAll('[data-admin-panel]');
    var panelButtons = document.querySelectorAll('[data-admin-panel-button]');
    var editForm = document.querySelector('[data-admin-edit-form]');
    var deleteForm = document.querySelector('[data-admin-delete-form]');
    var editSummary = document.querySelector('[data-admin-edit-summary]');
    var deleteSummary = document.querySelector('[data-admin-delete-summary]');
    var editSubmit = document.querySelector('[data-admin-edit-submit]');
    var deleteSubmit = document.querySelector('[data-admin-delete-submit]');
    var workspace = document.getElementById('admin-gestion');
    var workspaceContent = document.getElementById('admin-workspace-panels');
    var workspaceToggle = document.querySelector('[data-admin-workspace-toggle]');

    function openPanel(panelName) {
        panels.forEach(function (panel) {
            panel.classList.toggle('is-active', panel.dataset.adminPanel === panelName);
        });

        panelButtons.forEach(function (button) {
            button.classList.toggle('is-active', button.dataset.adminPanelButton === panelName);
        });
    }

    function ensureWorkspaceExpanded() {
        if (! workspaceToggle || ! workspaceContent) {
            return;
        }

        workspaceToggle.setAttribute('aria-expanded', 'true');
        workspaceContent.classList.remove('is-collapsed');
    }

    function focusWorkspace() {
        if (workspace) {
            workspace.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    function setFormValue(form, name, value) {
        var field = form ? form.querySelector('[name="' + name + '"]') : null;

        if (field) {
            field.value = value || '';
        }
    }

    function fillEditForm(data) {
        if (! editForm) {
            return;
        }

        editForm.action = data.updateUrl || '#';
        setFormValue(editForm, 'edit_id', data.id);
        setFormValue(editForm, 'edit_cve_uaslp', data.cveUaslp);
        setFormValue(editForm, 'edit_programa', data.programa);
        setFormValue(editForm, 'edit_area', data.area);
        setFormValue(editForm, 'edit_anio', data.anio);
        setFormValue(editForm, 'edit_alumno', data.alumno);
        setFormValue(editForm, 'edit_tema', data.tema);
        setFormValue(editForm, 'edit_director', data.director);
        setFormValue(editForm, 'edit_url', data.url);

        if (editSubmit) {
            editSubmit.disabled = false;
        }

        if (editSummary) {
            editSummary.textContent = 'Editando la tesis de ' + (data.alumno || 'sin alumno') + '.';
        }
    }

    function fillDeleteForm(data) {
        if (! deleteForm) {
            return;
        }

        deleteForm.action = data.deleteUrl || '#';

        if (deleteSubmit) {
            deleteSubmit.disabled = false;
        }

        if (deleteSummary) {
            deleteSummary.textContent = 'Vas a eliminar la tesis de ' + (data.alumno || 'sin alumno') + ': ' + (data.tema || 'sin título') + '.';
        }
    }

    panelButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            ensureWorkspaceExpanded();
            openPanel(button.dataset.adminPanelButton);
        });
    });

    document.querySelectorAll('[data-admin-edit]').forEach(function (button) {
        button.addEventListener('click', function () {
            ensureWorkspaceExpanded();
            fillEditForm(button.dataset);
            openPanel('edit');
            focusWorkspace();
        });
    });

    document.querySelectorAll('[data-admin-delete]').forEach(function (button) {
        button.addEventListener('click', function () {
            ensureWorkspaceExpanded();
            fillDeleteForm(button.dataset);
            openPanel('delete');
            focusWorkspace();
        });
    });

    if (adminConfig.initialEdit) {
        fillEditForm(adminConfig.initialEdit);
    }

    openPanel(adminConfig.openPanel || 'create');
});
