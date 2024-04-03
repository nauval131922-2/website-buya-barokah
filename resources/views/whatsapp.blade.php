<style>
    .chat-container p {
        position: relative;
        display: inline-block;
        background-color: #fff;
        padding: 0.5em 1em;
        font-size: 1em;
        border-radius: 1rem;
        box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.3), 0 0.0625rem 0.125rem rgba(0, 0, 0, 0.2);
        margin-left: 0.5em;
        cursor: pointer;
    }

    .chat-container p::before {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        top: 100%;
        left: 1em;
        border: 0.75rem solid transparent;
        border-bottom: none;
        border-top-color: #fff;
        filter: drop-shadow(0 0.0625rem 0.0625rem rgba(0, 0, 0, 0.1));

    }

    .chat-container {
        position: fixed;
        /* Menggunakan posisi tetap agar tetap di layar saat digulir */
        bottom: 1em;
        /* Menentukan jarak dari bagian bawah */
        left: 1em;
        /* Menentukan jarak dari bagian kiri */
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
        line-height: 1.5;
        font-weight: 300;
        z-index: 99999999;
    }

    .chat-container .fab.fa-whatsapp {
        color: #25d366;
        font-size: 1.5em;
        background-color: #25d366;
        color: white;
        border-radius: 50%;
        padding: 0.25em;
        cursor: pointer;
        margin-left: 0.75em;
    }

    .chat-container .fab.fa-whatsapp:hover {
        background-color: #128c7e;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="chat-container">
    <div class="chat-bubble">
        <p onclick="openWhatsApp()">Message us!</p>
    </div>
    <i class="fab fa-whatsapp" onclick="openWhatsApp()"></i>
</div>


<script>
    function openWhatsApp() {
        // Ganti nomor WhatsApp dengan nomor yang ingin Anda chat
        var phoneNumber = "6281227041901"; // Ganti dengan nomor WhatsApp yang diinginkan

        // Buat URL untuk tautan WhatsApp
        var url = "https://wa.me/" + phoneNumber;

        // Buka URL di tab baru
        window.open(url, "_blank");
    }
</script>
