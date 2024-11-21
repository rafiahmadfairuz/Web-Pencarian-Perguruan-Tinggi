window.addEventListener('scroll', function() {
    let header = document.querySelector('header');
    let logo = document.querySelector('.logo');
    let notif = document.querySelector('.notif');
    if (window.scrollY > 50) {
        header.style.backgroundColor = "white";
        header.classList.add('shadow-lg');
        logo.style.color = "black"
        notif.style.color = "black"


    } else {
        header.style.backgroundColor = "";
        header.classList.remove('shadow-lg');
        logo.style.color = "white"
        notif.style.color = "white"
    }
});
document.getElementById('fakultas').addEventListener('change', function () {
    let fakultasId = this.value

    if(fakultasId){
        fetch('/member/jurusan/' + fakultasId, {
            method: 'GET',
        })
        .then(response => response.json())
        .then(data => {
            // console.log(data)
            let jurusan = document.getElementById('jurusan')
            jurusan.innerHTML = ''

            data.forEach(function(value, key) {
                // console.log(value.id + value.nama)
                let pilihan = document.createElement('option')
                pilihan.value = value.id
                pilihan.textContent = value.nama
                jurusan.appendChild(pilihan)
            });
        })
        .catch(error => {
              console.error('Error nya : ', error)
        })
    } else {
        document.getElementById('jurusan').innerHTML = ''
    }
});


