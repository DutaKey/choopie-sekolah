<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="shadow-lg m-3 bg-body-tertiary rounded">
                    <div class="card">
                        <div class="card-header text-light" style="background-color: #443C68">
                            Keranjang
                        </div>
                        <div class="card-body">
                            {{ $jumlah }}
                        </div>
                    </div>
                </div>
                <div class="shadow-lg m-3 bg-body-tertiary rounded">
                    <div class="card">
                        <div class="card-header text-light" style="background-color: #443C68">
                            Belanjaan Saya
                        </div>
                        <div class="card-body" style="min-height: 295px">
                            @foreach ($datas as $item)
                                <p>{{ $item->nama_barang }}</p>
                                <a class="btn btn-danger" wire:click="delete({{ $item->id }})">Delete</a>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="shadow-lg m-3 bg-body-tertiary rounded">
                    <div class="card">
                        <div class="card-header text-light" style="background-color: #443C68">
                            Produk
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="card">
                                        <img src="{{ asset('image/hijau.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Motor Hijau</h5>
                                            <p class="card-text">Motor Laju Warne Hijau</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 50.000.000</li>
                                        </ul>
                                        <div class="card-body">
                                            <button class="btn btn-primary" wire:click="simpan('Motor Hijau', '50000000')">
                                                BELI
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card">
                                        <img src="{{ asset('image/merah.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Motor Merah</h5>
                                            <p class="card-text">Motor Laju Warne Merah</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 75.000.000</li>
                                        </ul>
                                        <div class="card-body">
                                            <button class="btn btn-primary" wire:click="simpan('Motor Merah', '75000000')">
                                                BELI
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card">
                                        <img src="{{ asset('image/Hitam.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Motor Hitam</h5>
                                            <p class="card-text">Motor Laju Warne Hitam</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 20.000.000</li>
                                        </ul>
                                        <div class="card-body">
                                            <button class="btn btn-primary" wire:click="simpan('Motor Hitam', '20000000')">
                                                BELI
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card">
                                        <img src="{{ asset('image/Putih.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Motor Putih</h5>
                                            <p class="card-text">Motor Laju Warne Putih</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 40.000.000</li>
                                        </ul>
                                        <div class="card-body">
                                            <button class="btn btn-primary" wire:click="simpan('Motor Putih', '40000000')">
                                                BELI
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
