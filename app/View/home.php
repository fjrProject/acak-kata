<div class="container-fluid p-0">
    <h1 class="bg-primary text-light fw-bold text-center py-2">Acak Kata</h1>
    <p class="text-center">Pilih Kelompok Kata:</p>
    <div class="container">
        <?php if(isset($model["grup"])):
            foreach($model["grup"] as $row):?>
                <a href="/grup/<?=$row["grup"]?>" class="text-decoration-none text-dark fs-6">
                    <div class="d-block ps-1 py-1 my-1 border border-2 rounded-2 border-secondary">
                        <?=$row["grup"]?>
                    </div>
                </a>
        <?php endforeach; endif;?>
        <div class="d-flex align-items-center justify-content-center">
            <a href="/add" class="text-center rounded-pill px-3 py-1 mt-3 text-decoration-none text-dark fw-bold bg-warning">Tambah Kata</a>
        </div>
    </div>
</div>