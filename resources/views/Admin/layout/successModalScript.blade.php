<script>
    document.addEventListener('DOMContentLoaded', function () {
        const successMessage = "{{ session('sukses') }}";
        if (successMessage) {
            const modal = document.getElementById('successModal');
            const messageElement = document.getElementById('successMessage');
            messageElement.textContent = successMessage;
            modal.classList.remove('hidden');

            // Close modal after 5 seconds
            // setTimeout(function () {
            //     modal.classList.add('hidden');
            // }, 2000);

            // Close modal on close button click
            document.getElementById('closeModalBtn').addEventListener('click', function () {
                modal.classList.add('hidden');
            });
        }
    });
</script>
