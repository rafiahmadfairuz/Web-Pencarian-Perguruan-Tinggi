document.addEventListener("DOMContentLoaded", () => {
    const dataInput = document.getElementById("namaFk");
    const buttonTambahFk = document.getElementById("buttonTambahFk");
    const listFakultas = document.getElementById("listFakultas");
    const allDataFakultas = document.getElementById("semuaDataFakultas");
    const formFakultas = document.getElementById("formFakultas");

    let dataArray = [];

    function cekItem(valueFk) {
        if (dataArray.includes(valueFk)) {
            alert("Fakultas Ini Sudah Ada");
            return false;
        } else {
            dataArray.push(valueFk);
            return true;
        }
    }

    buttonTambahFk.addEventListener("click", () => {
        const valueFk = dataInput.value.trim();
        if (valueFk) {
            let cek = cekItem(valueFk);

            console.log(dataArray);

            if (cek) {
                const listItem = document.createElement("li");
                listItem.classList.add(
                    "w-full",
                    "px-4",
                    "py-2",
                    "border-b",
                    "border-gray-200",
                    "rounded-t-lg",
                    "dark:border-gray-600",
                    "flex",
                    "justify-between"
                );

                listItem.textContent = valueFk;

                const batal = document.createElement("span");
                batal.textContent = "Batal";
                batal.classList.add("text-red-600", "hover:cursor-pointer");

                listItem.appendChild(batal);
                listFakultas.appendChild(listItem);

                dataInput.value = "";

                batal.addEventListener("click", () => {
                    listFakultas.removeChild(listItem);
                    const index = dataArray.indexOf(valueFk);
                    if (index !== -1) {
                        dataArray.splice(index, 1);
                    }
                });
                allDataFakultas.value = JSON.stringify(dataArray);
            }
        }
    });
    formFakultas.addEventListener("submit", (e) => {
        if (dataArray.length === 0) {
            e.preventDefault();
            alert("tambahkan Data Minimal 1");
        }
    });
});
