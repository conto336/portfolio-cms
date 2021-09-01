function verify(btn, file, name, authors, date, line, maxFileSize, progress, reset, uploadFile) {

    document.getElementById(btn).addEventListener("click", (e) => {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success btn-block",
            },
            buttonsStyling: false,
        });
        if ((document.getElementById(file).files.length === 0) && (document.getElementById(name)
                .value === "")) {
            e.preventDefault();
            Swal.fire(
                'Error',
                'Selecciona un archivo',
                'warning'
            )

            if (document.getElementById(file).classList.contains("is-valid")) {
                document.getElementById(file).classList.remove("is-valid");
                document.getElementById(file).classList.add("is-invalid");
            } else {
                document.getElementById(file).classList.add("is-invalid");
            }
        } else if ((document.getElementById(name).value === "") && (document.getElementById(file).files
                .length != 0)) {
            e.preventDefault();
            Swal.fire(
                'Error',
                'Ingresa un nombre',
                'warning'
            )
            document.getElementById(name).classList.add("is-invalid");

        } else if (document.getElementById(authors).value === "") {
            e.preventDefault();
            Swal.fire(
                'Error',
                'Ingresa los autores del documento',
                'warning'
            )
            if (document.getElementById(authors).classList.contains("is-valid")) {
                document.getElementById(authors).classList.remove("is-valid");
                document.getElementById(authors).classList.add("is-invalid");
            } else {
                document.getElementById(authors).classList.add("is-invalid");
            }
        } else if (document.getElementById(line).value === "") {
            e.preventDefault();
            Swal.fire(
                'Error',
                'Ingresa la línea de investigación',
                'warning'
            )
            if (document.getElementById(line).classList.contains("is-valid")) {
                document.getElementById(line).classList.remove("is-valid");
                document.getElementById(line).classList.add("is-invalid");
            } else {
                document.getElementById(line).classList.add("is-invalid");
            }
        }

        document.getElementById(name).addEventListener("keydown", () => {
            document.getElementById(name).classList.remove("is-invalid");
            document.getElementById(name).classList.add("is-valid");
        });
        document.getElementById(authors).addEventListener("keydown", () => {
            document.getElementById(authors).classList.remove("is-invalid");
            document.getElementById(authors).classList.add("is-valid");
        });
        document.getElementById(line).addEventListener("keydown", () => {
            document.getElementById(line).classList.remove("is-invalid");
            document.getElementById(line).classList.add("is-valid");
        });
        document.getElementById(authors).addEventListener("change", () => {
            document.getElementById(authors).classList.remove("is-invalid");
            document.getElementById(authors).classList.add("is-valid");
        });
    });
    document.getElementById(file).addEventListener("change", (e) => {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success btn-block",
            },
            buttonsStyling: false,
        });
        const size = (document.getElementById(file).files[0].size) / 1000000;
        const data = document.getElementById(file).files[0];
        const maxFileSizeTexContent = document.getElementById(maxFileSize).textContent;
        const maxData = Number.parseInt(maxFileSizeTexContent, 10);
        const fileReader = new FileReader();
        fileReader.readAsDataURL(data);
        if (size > maxData) {
            Swal.fire(
                'El archivo excede el limite soportado',
                `el maximo soportado es ${maxData} MB.`,
                'warning'
            ).then((result) => {
                document.getElementById(file).classList.add("is-invalid");
                document.getElementById(btn).disabled = true;
                document.getElementById(uploadFile).reset();
                document.getElementById(progress).value = 0;
            });
        }
        document.getElementById(btn).disabled = false;
        if (document.getElementById(file).classList.contains("is-invalid")) {
            document.getElementById(file).classList.remove("is-invalid");
            document.getElementById(file).classList.add("is-valid");
        } else {
            document.getElementById(file).classList.add("is-valid");
        }
        fileReader.addEventListener("progress", (e) => {
            document.getElementById(progress).value = Number.parseInt((e.loaded * 100) /
                e.total);
            document.getElementById(progress).innerHTML = "100%";
        });
    });

    document.getElementById(reset).addEventListener("click", () => {

        document.getElementById(progress).value = 0;
        document.getElementById(btn).disabled = false;
        if (
            document.getElementById(file).classList.contains("is-valid") ||
            document.getElementById(file).classList.contains("is-invalid") ||
            document.getElementById(name).classList.contains("is-invalid") ||
            document.getElementById(name).classList.contains("is-valid")
        ) {
            document.getElementById(file).classList.remove("is-valid");
            document.getElementById(file).classList.remove("is-invalid");
            document.getElementById(name).classList.remove("is-invalid");
            document.getElementById(name).classList.remove("is-valid");
        }
    });
}
verify('data', 'file', 'name', 'authors', 'date', 'line', 'maxFileSize', 'progress', 'resetAll', 'uploadFile');
