@extends('admin.master')
@section('body')
    <div class="container-fluid p-0">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
            <div class="col d-flex justify-content-between gap-2 mb-2">
                <div
                    class="w-100 cardItem1 d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column align-items-center">
                        <div class="mb-3 iconCircle iconCircleRed">
                            <i class="fa-solid fa-cart-shopping iconRed"></i>
                        </div>
                        <p class="fw-medium itemNum">1000</p>
                        <p class="itemText text-center">In progress orders</p>
                    </div>
                </div>

                <div
                    class="w-100 cardItem1 d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column align-items-center">
                        <div class="mb-3 iconCircle iconCircleRed">
                            <i class="fa-solid fa-cart-shopping iconRed"></i>
                        </div>
                        <p class="fw-medium itemNum">1000</p>
                        <p class="itemText text-center">Cancelled orders</p>
                    </div>
                </div>
            </div>
            <div class="col px-0 px-sm-2">
                <div
                    class="cardItem2 d-flex justify-content-evenly align-content-center align-items-center">
                    <div class="mb-0 iconCircle iconCircleRed">
                        <i class="fa-solid fa-cart-shopping iconRed"></i>
                    </div>
                    <div class="ms-2">
                        <p class="fw-medium itemNum">1000</p>
                        <span class="itemText">Out of stock products</span>
                    </div>
                </div>
                <div
                    class="cardItem2 d-flex justify-content-evenly align-content-center align-items-center">
                    <div class="mb-0 iconCircle iconCircleViolet">
                        <i class="fa-solid fa-tags fa-rotate-90 iconViolet"></i>
                    </div>
                    <div class="ms-1">
                        <p class="fw-medium itemNum">12000</p>
                        <span class="itemText">Delivered orders</span>
                    </div>
                </div>
            </div>
            <div class="col pe-0 pe-sm-2">
                <div
                    class="cardItem2 d-flex justify-content-evenly align-content-center align-items-center">
                    <div class="mb-0 iconCircle iconCircleOrange">
                        <i class="fa-solid fa-cubes-stacked iconOrange"></i>
                    </div>
                    <div class="ms-1">
                        <p class="fw-medium itemNum">9668</p>
                        <span class="itemText">Total products</span>
                    </div>
                </div>
                <div
                    class="cardItem2 d-flex justify-content-evenly align-content-center align-items-center">
                    <div class="mb-0 iconCircle iconCircleGreen">
                        <i class="fa-solid fa-dolly iconGreen"></i>
                    </div>
                    <div class="ms-1">
                        <p class="fw-medium itemNum">34000</p>
                        <span class="itemText">Order reviews</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div
                    class="cardItem2 d-flex justify-content-evenly align-content-center align-items-center">
                    <div class="ms-1">
                        <p class="fw-medium itemNum">1,80k</p>
                        <span class="itemText">Total earned</span>
                    </div>
                    <div class="mb-0 iconStraight">
                        <i
                            class="fa-duotone fa-waveform-lines fa-2xl fs-1"
                            style="
                      --fa-primary-color: rgba(115, 102, 255, 0.85);
                      --fa-secondary-color: rgba(100, 131, 253, 0.85);
                    "></i>
                    </div>
                </div>
                <div
                    class="cardItem2 d-flex justify-content-evenly align-content-center align-items-center">
                    <div class="ms-1">
                        <p class="fw-medium itemNum">6,90k</p>
                        <span class="itemText">Total order tax</span>
                    </div>
                    <div class="mb-0 iconStraight">
                        <i
                            class="fa-duotone fa-wave-pulse fa-2xl fs-1"
                            style="color: #17bcff"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- chart Data Visualization -->
    <div class="mt-3">
        <div class="container-fluid p-0">
            <div class="row row-cols-1 row-cols-lg-2">
                <!--  Orders chart-->
                <div class="col pe-lg-1">
                    <div class="cartItem mb-2">
                        <div class="d-flex justify-content-between mb-2">
                            <p class="itemNum fw-semibold">Orders</p>
                            <select
                                class="form-select form-select-sm w-auto text500"
                                aria-label=".form-select-sm example">
                                <option selected>This week</option>
                                <option value="1">This Month</option>
                                <option value="2">This Year</option>
                            </select>
                        </div>
                        <p class="itemNum fw-medium mb-3 text100">82</p>
                        <canvas id="orderChart"></canvas>
                    </div>
                </div>

                <!-- Sales chart  -->
                <div class="col ps-lg-1">
                    <div class="cartItem mb-2">
                        <div class="d-flex justify-content-between mb-2">
                            <p class="itemNum fw-semibold">Sales</p>
                            <select
                                class="form-select form-select-sm w-auto text500"
                                aria-label=".form-select-sm example">
                                <option selected>This week</option>
                                <option value="1">This Month</option>
                                <option value="2">This Year</option>
                            </select>
                        </div>
                        <p class="itemNum fw-medium mb-3 text100">
                            $ <span>2,239,991.83</span>
                        </p>
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-2">
                <!-- Top sold products card -->
                <div class="col pe-lg-1">
                    <div class="cartItem mt-2">
                        <div class="d-flex justify-content-between mb-2">
                            <p class="itemNum fw-semibold">Top sold products</p>
                            <div class="d-flex">
                                <select
                                    class="form-select form-select-sm me-1 text500"
                                    aria-label=".form-select-sm example">
                                    <option selected>5 / page</option>
                                    <option value="1">10 / page</option>
                                    <option value="2">20 / page</option>
                                </select>
                                <select
                                    class="form-select form-select-sm ms-1 text500"
                                    aria-label=".form-select-sm example">
                                    <option selected>This week</option>
                                    <option value="1">This Month</option>
                                    <option value="2">This Year</option>
                                </select>
                            </div>
                        </div>

                        <!-- top products -->
                        <div class="mt-3">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="d-flex w-50 align-items-center">
                                    <div class="imgCard40">
                                        <img
                                            class="img-fluid"
                                            src="{{asset('/')}}admin/images/product.png"
                                            alt="" />
                                    </div>
                                    <p class="m-0 ms-1 text100 textS1 fw-medium">
                                        Watering Meals
                                    </p>
                                </div>
                                <div class="text-end">
                                    <p class="m-0 text600 textS1">Sales</p>
                                    <p class="m-0 text100 textS1">5</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="d-flex w-50 align-items-center">
                                    <div class="imgCard40">
                                        <img
                                            class="img-fluid"
                                            src="{{asset('/')}}admin/images/product.png"
                                            alt="" />
                                    </div>
                                    <p class="m-0 ms-1 text100 textS1 fw-medium">
                                        Watering Meals
                                    </p>
                                </div>
                                <div class="text-end">
                                    <p class="m-0 text600 textS1">Sales</p>
                                    <p class="m-0 text100 textS1">5</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="d-flex w-50 align-items-center">
                                    <div class="imgCard40">
                                        <img
                                            class="img-fluid"
                                            src="{{asset('/')}}admin/images/product.png"
                                            alt="" />
                                    </div>
                                    <p class="m-0 ms-1 text100 textS1 fw-medium">
                                        Watering Meals
                                    </p>
                                </div>
                                <div class="text-end">
                                    <p class="m-0 text600 textS1">Sales</p>
                                    <p class="m-0 text100 textS1">5</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="d-flex w-50 align-items-center">
                                    <div class="imgCard40">
                                        <img
                                            class="img-fluid"
                                            src="{{asset('/')}}admin/images/product.png"
                                            alt="" />
                                    </div>
                                    <p class="m-0 ms-1 text100 textS1 fw-medium">
                                        Watering Meals
                                    </p>
                                </div>
                                <div class="text-end">
                                    <p class="m-0 text600 textS1">Sales</p>
                                    <p class="m-0 text100 textS1">5</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="d-flex w-50 align-items-center">
                                    <div class="imgCard40">
                                        <img
                                            class="img-fluid"
                                            src="{{asset('/')}}admin/images/product.png"
                                            alt="" />
                                    </div>
                                    <p class="m-0 ms-1 text100 textS1 fw-medium">
                                        Watering Meals
                                    </p>
                                </div>
                                <div class="text-end">
                                    <p class="m-0 text600 textS1">Sales</p>
                                    <p class="m-0 text100 textS1">5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Top customers card -->
                <div class="col ps-lg-1">
                    <div class="cartItem mt-2">
                        <div class="d-flex justify-content-between mb-2">
                            <p class="itemNum fw-semibold">Top customers</p>
                            <div class="d-flex">
                                <select
                                    class="form-select form-select-sm me-1 text500"
                                    aria-label=".form-select-sm example">
                                    <option selected>5 / page</option>
                                    <option value="1">10 / page</option>
                                    <option value="2">20 / page</option>
                                </select>
                                <select
                                    class="form-select form-select-sm ms-1 text500"
                                    aria-label=".form-select-sm example">
                                    <option selected>This week</option>
                                    <option value="1">This Month</option>
                                    <option value="2">This Year</option>
                                </select>
                            </div>
                        </div>

                        <!-- customers -->
                        <div class="mt-3">
                            <!-- single user card -->
                            <div class="d-flex justify-content-between mb-3">
                                <div class="d-flex w-50 align-items-center">
                                    <div class="imgCard40">
                                        <img
                                            class="img-fluid"
                                            src="{{asset('/')}}admin/images/user.png"
                                            alt="" />
                                    </div>
                                    <div class="">
                                        <p class="m-0 ms-1 text100 textS1 fw-medium">
                                            Dennis Errikson
                                        </p>
                                        <p class="m-0 ms-1 text600 textS1">12345678</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <p class="m-0 text600 textS1"><span>3</span> Orders</p>
                                    <p class="m-0 text100 textS1">
                                        $ <span>118,775.90</span>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="d-flex w-50 align-items-center">
                                    <div class="imgCard40">
                                        <img
                                            class="img-fluid"
                                            src="{{asset('/')}}admin/images/user.png"
                                            alt="" />
                                    </div>
                                    <div class="">
                                        <p class="m-0 ms-1 text100 textS1 fw-medium">
                                            Dennis Errikson
                                        </p>
                                        <p class="m-0 ms-1 text600 textS1">12345678</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <p class="m-0 text600 textS1"><span>3</span> Orders</p>
                                    <p class="m-0 text100 textS1">
                                        $ <span>118,775.90</span>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="d-flex w-50 align-items-center">
                                    <div class="imgCard40">
                                        <img
                                            class="img-fluid"
                                            src="{{asset('/')}}admin/images/user.png"
                                            alt="" />
                                    </div>
                                    <div class="">
                                        <p class="m-0 ms-1 text100 textS1 fw-medium">
                                            Dennis Errikson
                                        </p>
                                        <p class="m-0 ms-1 text600 textS1">12345678</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <p class="m-0 text600 textS1"><span>3</span> Orders</p>
                                    <p class="m-0 text100 textS1">
                                        $ <span>118,775.90</span>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="d-flex w-50 align-items-center">
                                    <div class="imgCard40">
                                        <img
                                            class="img-fluid"
                                            src="{{asset('/')}}admin/images/user.png"
                                            alt="" />
                                    </div>
                                    <div class="">
                                        <p class="m-0 ms-1 text100 textS1 fw-medium">
                                            Dennis Errikson
                                        </p>
                                        <p class="m-0 ms-1 text600 textS1">12345678</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <p class="m-0 text600 textS1"><span>3</span> Orders</p>
                                    <p class="m-0 text100 textS1">
                                        $ <span>118,775.90</span>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="d-flex w-50 align-items-center">
                                    <div class="imgCard40">
                                        <img
                                            class="img-fluid"
                                            src="{{asset('/')}}admin/images/user.png"
                                            alt="" />
                                    </div>
                                    <div class="">
                                        <p class="m-0 ms-1 text100 textS1 fw-medium">
                                            Dennis Errikson
                                        </p>
                                        <p class="m-0 ms-1 text600 textS1">12345678</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <p class="m-0 text600 textS1"><span>3</span> Orders</p>
                                    <p class="m-0 text100 textS1">
                                        $ <span>118,775.90</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
