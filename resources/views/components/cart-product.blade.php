<div class="row mb-4 d-flex justify-content-between align-items-center">
    <div class="col-md-2 col-lg-2 col-xl-2">
        <img
            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img5.webp"
            class="img-fluid rounded-3" alt="Cotton T-shirt">
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3">
        <h6 class="text-muted">Shirt</h6>
        <h6 class="mb-0">Cotton T-shirt</h6>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
        <button data-mdb-button-init data-mdb-ripple-init
                class="btn btn-link px-2"
                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
            <i class="fas fa-minus"></i>
        </button>

        <input id="form1" min="0" name="quantity" value="1" type="number"
               class="form-control form-control-sm"/>

        <button data-mdb-button-init data-mdb-ripple-init
                class="btn btn-link px-2"
                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
            <i class="fas fa-plus"></i>
        </button>
    </div>
    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
        <h6 class="mb-0">€ 44.00</h6>
    </div>
    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
    </div>
</div>
