<div class="container">
    <div class="d-flex align-items-center justify-content-start border-bottom border-2 border-dark">
        <a href="/" class=" bg-danger px-2 rounded-pill text-decoration-none text-light fw-bold">back</a>
        <p class="fs-2 mb-0 ms-2 fw-bold text-capitalize"><?=$model["title"]?></p>
    </div>
</div>
<form action="" method="post" class="container mt-5 text-center">
    <label for="grup" class="fw-bold d-block text-center mt-3">Judul</label>
    <input class="w-100 border-0 border-bottom border-2 border-secondary" type="text" name="grup" id="grup" required autocomplete="off" value=<?=$model["grup"]??""?> >
    <label for="kata" class="fw-bold d-block text-center mt-4">Kata:</label>
    <label for="kata" style="font-size: 11px; color:red">*pisahkan setiap kata menggunakan tanda koma dan spasi ex) satu, dua</label>
    <textarea class="w-100 border border-2 border-secondary" row="4" name="kata" id="kata" autocomplete="off" rows="4" required><?=$model["kata"]??""?></textarea>
    <button type="submit" class="mt-4 border-0 rounded-pill w-75 bg-primary fw-bold text-center text-light">simpan</button>
</form>