document.getElementById('buttonTambahFk').addEventListener('click', function () {
    let dataInput = document.getElementById('namaFk').value
    let listFk = document.getElementById('listFk')
    listFk.innerHTML += dataInput
    console.log(dataInput)
 })
