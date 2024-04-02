<style>
        .visit-counter {
            position: fixed;
            /* top: 15px; */
            top: 80px;
            /* transform: translateY(-50%); */
            /* Ubah posisi ke bawah */
            left: 15px;
            font-size: 12px;
            /* Ukuran font kecilkan */
            /* background-color: #1bbd36; */
            color: #1bbd36;
            /* color: #fff; */
            background-color: #fff;
            padding: 5px 8px;
            /* border: 1px solid #1bbd36; */
            /* Sesuaikan padding */
            border-radius: 5px;
            transition: transform 0.3s ease;
            margin-bottom: 0;
            z-index: 9999;
        }

        .visit-counter:hover {
            transform: translateY(0) scale(1.05);
            /* Ubah transform */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .visit-counter strong {
            display: none;
        }

        .visit-counter:hover .bx-stats {
            display: none;
        }

        .visit-counter:hover strong,
        .visit-counter:hover span {
            display: inline-block;
        }

        .visit-counter span {
            font-weight: bold;
        }

        .visit-counter .bx-stats {
            display: inline-block;
            font-size: 16px;
            /* Sesuaikan ukuran font */
            margin-right: 5px;
            /* Sesuaikan margin */
        }

        .visit-counter .actual-count {
            display: none;
            /* Sembunyikan nilai sebenarnya */
        }

        .visit-counter:hover .actual-count {
            display: inline-block;
            /* Tampilkan nilai sebenarnya saat dihover */
        }

        .visit-counter:hover .plus-sign {
            display: none;
            /* Sembunyikan tanda + saat dihover */
        }
    </style>

<p class="visit-counter">
    <i class='bx bx-stats'></i>
    <strong>Jumlah kunjungan:</strong>
    <span class="plus-sign">
        @if ($visit_count > 99)
            99+
        @else
            {{ $visit_count }}
        @endif
    </span>
    <span class="actual-count">
        {{ $visit_count }}
    </span>
</p>
