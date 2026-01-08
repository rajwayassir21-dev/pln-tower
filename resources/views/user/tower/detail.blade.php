<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Tower | PLN Tower</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --pln-blue: #0066cc;
            --pln-yellow: #ffcc00;
            --pln-dark: #000000;
            --pln-light: #f8f9fa;
        }

        body {
            background: linear-gradient(135deg, #f5f7fb 0%, #eef2f7 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            padding-bottom: 50px;
        }

        /* HEADER */
        .navbar {
            background: linear-gradient(135deg, var(--pln-blue) 0%, #004d99 100%);
            padding: 15px 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: white;
            font-weight: 700;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-brand i {
            color: var(--pln-yellow);
        }

        /* MAIN CONTAINER */
        .container {
            max-width: 1200px;
            margin-top: 30px;
        }

        /* HEADER CARD */
        .header-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            padding: 30px;
            margin-bottom: 30px;
            border-left: 6px solid var(--pln-blue);
            transition: transform 0.3s ease;
        }

        .header-card:hover {
            transform: translateY(-3px);
        }

        .header-title {
            color: var(--pln-dark);
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 5px;
        }

        .header-subtitle {
            color: #666;
            font-size: 1rem;
            margin-bottom: 0;
        }

        /* TOWER INFO CARD */
        .info-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 30px;
            border-top: 4px solid var(--pln-yellow);
        }

        .info-header {
            background: linear-gradient(135deg, var(--pln-blue) 0%, #004d99 100%);
            padding: 25px;
            color: white;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .info-header i {
            font-size: 2rem;
            color: var(--pln-yellow);
        }

        .info-header h4 {
            font-weight: 700;
            margin: 0;
            font-size: 1.5rem;
        }

        /* INFO ITEMS */
        .info-item {
            padding: 25px;
            border-bottom: 1px solid #eee;
            transition: background-color 0.3s ease;
        }

        .info-item:hover {
            background-color: #f9f9f9;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: var(--pln-blue);
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .info-label i {
            width: 20px;
            text-align: center;
            color: var(--pln-blue);
        }

        .info-value {
            color: #333;
            font-size: 1.1rem;
            font-weight: 500;
            margin: 0;
            padding-left: 30px;
        }

        .info-value.highlight {
            background-color: rgba(255, 204, 0, 0.1);
            padding: 10px 15px;
            border-radius: 8px;
            border-left: 3px solid var(--pln-yellow);
        }

        /* STATUS BADGE */
        .status-badge {
            display: inline-block;
            padding: 6px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-badge.sertifikat {
            background-color: rgba(40, 167, 69, 0.15);
            color: #28a745;
            border: 1px solid #28a745;
        }

        .status-badge.belum {
            background-color: rgba(220, 53, 69, 0.15);
            color: #dc3545;
            border: 1px solid #dc3545;
        }

        /* MAP CARD */
        .map-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 30px;
            border-top: 4px solid #28a745;
        }

        .map-container {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, #e0e7ff 0%, #d1d8ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--pln-blue);
            position: relative;
            overflow: hidden;
        }

        .map-preview {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .map-preview i {
            font-size: 4rem;
            opacity: 0.7;
        }

        .map-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.7));
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 15px;
            text-align: center;
            padding: 20px;
        }

        .map-overlay.hidden {
            display: none;
        }

        .map-iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* TOMBOL GOOGLE MAPS */
        .btn-maps {
            background: linear-gradient(135deg, #4285F4 0%, #34A853 100%);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-maps:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(66, 133, 244, 0.3);
            color: white;
        }

        .btn-maps.small {
            padding: 8px 15px;
            font-size: 0.9rem;
        }

        .btn-direction {
            background: linear-gradient(135deg, #EA4335 0%, #FBBC05 100%);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-direction:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(234, 67, 53, 0.3);
            color: white;
        }

        /* ACTION BUTTONS */
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .btn-back {
            background-color: #6c757d;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-back:hover {
            background-color: #5a6268;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            color: white;
        }

        .btn-print {
            background-color: var(--pln-blue);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-print:hover {
            background-color: #0052a3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 102, 204, 0.2);
            color: white;
        }

        .btn-download {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-download:hover {
            background-color: #218838;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.2);
            color: white;
        }

        /* MAP CONTROLS */
        .map-controls {
            padding: 20px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            background: white;
            border-top: 1px solid #eee;
        }

        /* LOADING SPINNER */
        .loading-spinner {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid var(--pln-blue);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .container {
                margin-top: 20px;
                padding: 0 15px;
            }

            .header-card {
                padding: 20px;
            }

            .header-title {
                font-size: 1.5rem;
            }

            .info-header {
                padding: 20px;
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }

            .info-header i {
                font-size: 1.8rem;
            }

            .info-item {
                padding: 20px 15px;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn-back, .btn-print, .btn-download, .btn-maps, .btn-direction {
                width: 100%;
                justify-content: center;
            }

            .map-controls {
                flex-direction: column;
            }
        }

        @media (max-width: 576px) {
            .navbar {
                padding: 12px 15px;
            }

            .navbar-brand {
                font-size: 1.1rem;
            }

            .info-value {
                font-size: 1rem;
            }

            .map-preview i {
                font-size: 3rem;
            }
        }

        /* ANIMATIONS */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        /* CUSTOM SCROLLBAR */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--pln-blue);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0052a3;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-broadcast-tower"></i>
                <span>PLN TOWER MONITORING</span>
            </a>
        </div>
    </nav>

    <div class="container fade-in">
        <!-- HEADER -->
        <div class="header-card">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="header-title">Detail Data Tower</h1>
                    <p class="header-subtitle">Informasi lengkap tentang tower PLN</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <div class="d-inline-block px-4 py-2 rounded" style="background-color: rgba(0, 102, 204, 0.1);">
                        <small class="text-muted d-block">ID Tower</small>
                        <strong class="text-primary">#{{ $tower->id ?? 'N/A' }}</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- INFORMASI UTAMA -->
            <div class="col-lg-8">
                <div class="info-card">
                    <div class="info-header">
                        <i class="fas fa-info-circle"></i>
                        <h4>Informasi Utama</h4>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-file-alt"></i>
                            Deskripsi Tower
                        </div>
                        <p class="info-value highlight">{{ $tower->description ?? 'Tidak tersedia' }}</p>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-map-marker-alt"></i>
                            Lokasi
                        </div>
                        <p class="info-value">{{ $tower->lokasi ?? 'Tidak tersedia' }}</p>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-certificate"></i>
                            Status Sertifikat
                        </div>
                        <p class="info-value">
                            @if($tower->status_sertifikat == 'bersertifikat')
                                <span class="status-badge sertifikat">
                                    <i class="fas fa-check-circle me-1"></i> BERSERTIFIKAT
                                </span>
                            @else
                                <span class="status-badge belum">
                                    <i class="fas fa-clock me-1"></i> BELUM BERSERTIFIKAT
                                </span>
                            @endif
                        </p>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-expand-alt"></i>
                            Luas Area
                        </div>
                        <p class="info-value">{{ $tower->luas ? $tower->luas . ' m²' : 'Tidak tersedia' }}</p>
                    </div>
                </div>

                <!-- INFORMASI TEKNIS -->
                <div class="info-card">
                    <div class="info-header">
                        <i class="fas fa-cogs"></i>
                        <h4>Informasi Teknis</h4>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-item">
                                <div class="info-label">
                                    <i class="fas fa-globe-asia"></i>
                                    Latitude
                                </div>
                                <p class="info-value">{{ $tower->latitude ?? 'Tidak tersedia' }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item">
                                <div class="info-label">
                                    <i class="fas fa-globe-americas"></i>
                                    Longitude
                                </div>
                                <p class="info-value">{{ $tower->longitude ?? 'Tidak tersedia' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-file-signature"></i>
                            Nomor Surat
                        </div>
                        <p class="info-value">{{ $tower->no_surat ?? 'Tidak tersedia' }}</p>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-file-contract"></i>
                            Nomor Sertifikat
                        </div>
                        <p class="info-value">{{ $tower->no_sertifikat ?? 'Tidak tersedia' }}</p>
                    </div>
                </div>
            </div>

            <!-- INFORMASI WILAYAH & MAP -->
            <div class="col-lg-4">
                <!-- INFORMASI WILAYAH -->
                <div class="info-card">
                    <div class="info-header">
                        <i class="fas fa-map-marked-alt"></i>
                        <h4>Informasi Wilayah</h4>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-city"></i>
                            Kota
                        </div>
                        <p class="info-value">{{ $tower->city ?? 'Tidak tersedia' }}</p>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-building"></i>
                            Kecamatan
                        </div>
                        <p class="info-value">{{ $tower->kecamatan ?? 'Tidak tersedia' }}</p>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-home"></i>
                            Kelurahan
                        </div>
                        <p class="info-value">{{ $tower->kelurahan ?? 'Tidak tersedia' }}</p>
                    </div>
                </div>

                <!-- INFORMASI WAKTU -->
                <div class="info-card">
                    <div class="info-header">
                        <i class="fas fa-calendar-alt"></i>
                        <h4>Informasi Waktu</h4>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-calendar-check"></i>
                            Tanggal Awal
                        </div>
                        <p class="info-value">{{ $tower->tgl_awal ?? 'Tidak tersedia' }}</p>
                    </div>

                    <div class="info-item">
                        <div class="info-label">
                            <i class="fas fa-calendar-times"></i>
                            Tanggal Akhir
                        </div>
                        <p class="info-value">{{ $tower->tgl_akhir ?? 'Tidak tersedia' }}</p>
                    </div>
                </div>

                <!-- MAP PREVIEW & DIRECTIONS -->
                <div class="map-card">
                    <div class="info-header">
                        <i class="fas fa-map"></i>
                        <h4>Lokasi Peta</h4>
                    </div>

                    <!-- Map Controls -->
                    <div class="map-controls">
                        <a href="{{ $tower->latitude && $tower->longitude ? 'https://www.google.com/maps?q=' . $tower->latitude . ',' . $tower->longitude : '#' }}"
                           class="btn-maps"
                           target="_blank"
                           id="viewInMapsBtn">
                            <i class="fab fa-google"></i> Buka di Google Maps
                        </a>

                        <a href="{{ $tower->latitude && $tower->longitude ? 'https://www.google.com/maps/dir/?api=1&destination=' . $tower->latitude . ',' . $tower->longitude . '&travelmode=driving' : '#' }}"
                           class="btn-direction"
                           target="_blank"
                           id="getDirectionsBtn">
                            <i class="fas fa-directions"></i> Dapatkan Arahan
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ACTION BUTTONS -->
        <div class="action-buttons">
            <a href="{{ url()->previous() }}" class="btn btn-back">
                <i class="fas fa-arrow-left me-1"></i> Kembali ke Dashboard
            </a>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="mt-5 pt-4 border-top text-center text-muted">
        <div class="container">
            <p class="mb-2">
                &copy; {{ date('Y') }} PLN UPT Bekasi - Sistem Monitoring Tower
            </p>
            <small>
                <i class="fas fa-shield-alt me-1"></i> Data ini bersifat rahasia dan hanya untuk keperluan internal
            </small>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Cek apakah koordinat tersedia
        const hasCoordinates = {{ !empty($tower->latitude) && !empty($tower->longitude) ? 'true' : 'false' }};
        const latitude = {{ $tower->latitude ?? 'null' }};
        const longitude = {{ $tower->longitude ?? 'null' }};
        const towerName = "{{ $tower->description ?? 'Tower PLN' }}";
        const towerLocation = "{{ $tower->lokasi ?? '' }}";

        // Fungsi untuk memuat Google Map
        function loadGoogleMap() {
            if (!hasCoordinates) {
                alert('Koordinat tidak tersedia untuk tower ini.');
                return;
            }

            const mapPreview = document.getElementById('mapPreview');
            const mapOverlay = document.getElementById('mapOverlay');
            const googleMap = document.getElementById('googleMap');
            const mapLoading = document.getElementById('mapLoading');

            // Tampilkan loading
            mapLoading.style.display = 'block';
            mapPreview.style.display = 'none';

            // Buat URL untuk embed Google Maps
            const mapsUrl = `https://www.google.com/maps/embed/v1/view?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&center=${latitude},${longitude}&zoom=15&maptype=roadmap`;

            // Set source iframe
            googleMap.src = mapsUrl;

            // Sembunyikan overlay saat iframe selesai load
            googleMap.onload = function() {
                mapLoading.style.display = 'none';
                googleMap.style.display = 'block';
                mapOverlay.classList.add('hidden');
            };

            googleMap.onerror = function() {
                mapLoading.style.display = 'none';
                mapPreview.style.display = 'flex';
                alert('Gagal memuat peta. Silakan coba lagi atau gunakan tombol "Buka di Google Maps".');
            };
        }

        // Fungsi untuk mendapatkan arah dengan titik awal otomatis (lokasi pengguna)
        function getDirectionsWithUserLocation() {
            if (!hasCoordinates) {
                alert('Koordinat tidak tersedia untuk tower ini.');
                return;
            }

            if (navigator.geolocation) {
                // Tampilkan loading
                const directionsBtn = document.getElementById('getDirectionsBtn');
                const originalHTML = directionsBtn.innerHTML;
                directionsBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mendapatkan lokasi...';
                directionsBtn.disabled = true;

                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        const userLat = position.coords.latitude;
                        const userLng = position.coords.longitude;

                        // URL untuk arah dengan lokasi pengguna sebagai titik awal
                        const directionsUrl = `https://www.google.com/maps/dir/?api=1&origin=${userLat},${userLng}&destination=${latitude},${longitude}&travelmode=driving`;

                        // Reset tombol
                        directionsBtn.innerHTML = originalHTML;
                        directionsBtn.disabled = false;

                        // Buka tab baru
                        window.open(directionsUrl, '_blank');
                    },
                    function(error) {
                        // Jika gagal mendapatkan lokasi pengguna, gunakan default
                        const directionsUrl = `https://www.google.com/maps/dir/?api=1&destination=${latitude},${longitude}&travelmode=driving`;

                        // Reset tombol
                        directionsBtn.innerHTML = originalHTML;
                        directionsBtn.disabled = false;

                        // Buka tab baru
                        window.open(directionsUrl, '_blank');

                        console.log('Error getting location:', error);
                    },
                    {
                        enableHighAccuracy: true,
                        timeout: 5000,
                        maximumAge: 0
                    }
                );
            } else {
                // Fallback jika geolocation tidak support
                const directionsUrl = `https://www.google.com/maps/dir/?api=1&destination=${latitude},${longitude}&travelmode=driving`;
                window.open(directionsUrl, '_blank');
            }
        }

        // Fungsi untuk share lokasi
        function shareLocation() {
            if (!hasCoordinates) {
                alert('Koordinat tidak tersedia untuk tower ini.');
                return;
            }

            const shareUrl = `https://www.google.com/maps?q=${latitude},${longitude}`;
            const shareText = `Lokasi ${towerName}: ${towerLocation}\nLihat di Google Maps: ${shareUrl}`;

            if (navigator.share) {
                navigator.share({
                    title: `Lokasi ${towerName}`,
                    text: shareText,
                    url: shareUrl
                }).catch(console.error);
            } else {
                // Fallback untuk browser yang tidak support Web Share API
                navigator.clipboard.writeText(shareText).then(function() {
                    alert('Tautan lokasi telah disalin ke clipboard!');
                }).catch(function() {
                    // Fallback jika clipboard tidak tersedia
                    prompt('Salin tautan berikut:', shareUrl);
                });
            }
        }

        // Fungsi untuk download data
        function downloadData() {
            const data = {
                tower_id: {{ $tower->id ?? 'null' }},
                description: "{{ $tower->description ?? '' }}",
                location: "{{ $tower->lokasi ?? '' }}",
                coordinates: hasCoordinates ? `${latitude}, ${longitude}` : 'Tidak tersedia',
                status_sertifikat: "{{ $tower->status_sertifikat ?? '' }}",
                luas: "{{ $tower->luas ?? '' }}",
                city: "{{ $tower->city ?? '' }}",
                kecamatan: "{{ $tower->kecamatan ?? '' }}",
                download_date: new Date().toLocaleString('id-ID')
            };

            const blob = new Blob([JSON.stringify(data, null, 2)], { type: 'application/json' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `tower_pln_${data.tower_id}_data.json`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }

        // Animasi saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            const items = document.querySelectorAll('.info-item');
            items.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.05}s`;
            });

            // Tambahkan efek hover pada card
            const cards = document.querySelectorAll('.info-card, .map-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Nonaktifkan tombol jika koordinat tidak tersedia
            if (!hasCoordinates) {
                document.getElementById('viewInMapsBtn').classList.add('disabled');
                document.getElementById('getDirectionsBtn').classList.add('disabled');
                document.getElementById('viewInMapsBtn').onclick = function(e) {
                    e.preventDefault();
                    alert('Koordinat tidak tersedia untuk tower ini.');
                };
                document.getElementById('getDirectionsBtn').onclick = function(e) {
                    e.preventDefault();
                    alert('Koordinat tidak tersedia untuk tower ini.');
                };
            } else {
                // Update tombol arah untuk menggunakan lokasi pengguna
                document.getElementById('getDirectionsBtn').onclick = function(e) {
                    e.preventDefault();
                    getDirectionsWithUserLocation();
                };
            }

            // Auto-load map jika koordinat tersedia
            if (hasCoordinates) {
                setTimeout(loadGoogleMap, 1000);
            }
        });

        // Tambahkan event listener untuk resize map
        window.addEventListener('resize', function() {
            const iframe = document.getElementById('googleMap');
            if (iframe.style.display !== 'none') {
                iframe.style.height = '300px';
            }
        });
    </script>
</body>

</html>
