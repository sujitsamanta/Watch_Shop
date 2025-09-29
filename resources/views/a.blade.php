// account start
        const editBtn = document.getElementById("editBtn");
        const saveBtn = document.getElementById("saveBtn");
        const cancelBtn = document.getElementById("cancelBtn");
        // const photoInput = document.getElementById("photoInput");
        // const profilePhoto = document.getElementById("profilePhoto");

        // Select only visible inputs & textareas (exclude file input)

        // New → Exclude file & hidden inputs

        // const inputs = document.querySelectorAll("input:not([type=file]):not([type=hidden]), textarea");
        // Select only inputs inside the form (exclude hidden & file)

        const form = document.querySelector("form[action='/account_upadate']");
        const inputs = form.querySelectorAll("input:not([type=file]):not([type=hidden]), textarea");



        // Save original values
        let originalValues = {};
        inputs.forEach(input => originalValues[input.id] = input.value);

        let isEditing = false;

        editBtn.addEventListener("click", () => {
            isEditing = true;
            editBtn.classList.add("hidden");
            saveBtn.classList.remove("hidden");
            cancelBtn.classList.remove("hidden");

            inputs.forEach(input => {
                // Keep Email field readonly
                if (input.id === "email") return;

                input.removeAttribute("readonly");
                input.classList.add("edit-mode");
            });
        });

        saveBtn.addEventListener("click", () => {
            inputs.forEach(input => {
                // Skip Email field
                if (input.id === "email") return;

                originalValues[input.id] = input.value;
                input.setAttribute("readonly", "true");
                input.classList.remove("edit-mode");
            });
            exitEditMode();
        });

        cancelBtn.addEventListener("click", () => {
            inputs.forEach(input => {
                // Skip Email field
                if (input.id === "email") return;

                input.value = originalValues[input.id];
                input.setAttribute("readonly", "true");
                input.classList.remove("edit-mode");
            });
            exitEditMode();
        });

        function exitEditMode() {
            isEditing = false;
            editBtn.classList.remove("hidden");
            saveBtn.classList.add("hidden");
            cancelBtn.classList.add("hidden");
        }