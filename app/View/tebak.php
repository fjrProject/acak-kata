<div class="container pt-2">
    <div class="d-flex justify-content-between align-items-center border-bottom border-2 border-dark">
        <div class="d-flex align-items-center justify-content-start">
            <a href="/" class=" bg-danger px-2 rounded-pill text-decoration-none text-light fw-bold">back</a>
            <p class="fs-2 mb-0 ms-2 fw-bold text-capitalize"><?=$model["title"]?></p>
        </div>
        <a href="/delete/<?=$model['title']?>"><i class="material-icons" style="color:red;">delete</i></a>
    </div>

    <?php if($model["index"] == "STOP"){?>
        <div class="container my-5 py-5 border border-3 border-info rounded-2">
            <div class="d-flex justify-content-center align-items-center">
                <p class="fw-bold fs-2 mb-0 text-uppercase">FINISH</p>
            </div>
        </div>
        <form action="" method="get" class="d-flex justify-content-between">
            <a class="text-center fw-bold py-1 px-2 text-decoration-none bg-danger text-light rounded-pill w-25 border-0" href="/">back</a>
            <button class="text-center fw-bold py-1 px-3 rounded-pill bg-success text-light w-25 border-0">replay</button>
        </form>
    <?php }else{?>
    <div class="container my-5 py-5 border border-3 border-info rounded-2">
        <div class="d-flex justify-content-center align-items-center">
            <p class="fw-bold fs-2 mb-0 text-uppercase"><?=$model["kataKata"][$model["index"]]["kata"]?></p>
        </div>
    </div>

    <form action="" method="post" class="d-flex justify-content-center align-items-center">
        <div class="d-block">

            <input type="hidden" name="history" value=<?=$model["history"]?> >
            <button class="border border-5 text-danger border-danger fs-2 mt-5 rounded-circle px-2 fw-bold" style="width: 50vw; height: 50vw;" value=<?=$model["index"]?> name="index">next</button>
        </div>
    </form>
    <?php }?>
</div>