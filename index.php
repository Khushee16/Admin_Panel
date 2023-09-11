<?php include("header.php") ?>

<div class="row g-md-4 g-2 py-1 py-md-3 px-md-3 px-1 mx-0">
    <div class="col-12 col-md-6 col-lg-3 ">
        <a href="#" class="card py-2 py-xl-5 element">
            <div class="d-flex align-items-center gc_dashboard_boxes mx-auto">
                <img src="Assets/Images/dash_order.png" alt="" class="me-3">
                <h4>Create Order</h4>
            </div>
        </a>
    </div>
    <div class="col-12 col-md-6 col-lg-3 ">
        <a href="#" class="card py-2 py-xl-5 element">
            <div class="d-flex align-items-center gc_dashboard_boxes mx-auto">
                <img src="Assets/Images/dash_products.png" alt="" class="me-3">
                <h4>Search Product</h4>
            </div>
        </a>
    </div>
    <div class="col-12 col-md-6 col-lg-3 ">
        <a href="#" class="card py-2 py-xl-5 element">
            <div class="d-flex align-items-center gc_dashboard_boxes mx-auto">
                <img src="Assets/Images/dash_staff.png" alt="" class="me-3">
                <h4>Add Staff</h4>
            </div>
        </a>
    </div>
    <div class="col-12 col-md-6 col-lg-3 ">
        <a href="#" class="card py-2 py-xl-5 element">
            <div class="d-flex align-items-center gc_dashboard_boxes mx-auto">
                <img src="Assets/Images/dash_client.png" alt="" class="me-3">
                <h4>Total Clients</h4>
            </div>
        </a>
    </div>
    <div class="col-md-12 col-lg-8">
        <div class="card p-2">
            <div class="d-flex justify-content-end text center align-items-center mb-2">
                <label for="year-select" class="pe-4 fw-bold">Select Year:</label>
                <select id="year-select" class="bg-light border-black border-dark-subtle">
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
            </div>
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4">
        <div class="card  pt-3">
            <h5 class="text-center mb-3">Highest Selling Products</h5>
            <div class="table-responsive">
                <table id="" class="table rwd-table w-100 mb-0" >
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-header="Product Name">Acne Controller Serum</td>
                            <td data-header="Count">5</td>
                        </tr>
                        <tr>
                            <td data-header="Product Name">Ozonized Purifying Cleanser</td>
                            <td data-header="Count">5</td>
                        </tr>
                        <tr>
                            <td data-header="Product Name">Future Texture Toner</td>
                            <td data-header="Count">4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="card p-2">  
            <div id="pieChartContainer" style="height: 450px;"></div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="card p-2">
            <h2 class="pb-3 text-center">Percentages of Votes</h2>
            <canvas id="chartContainerpie" width="400" style="height: 400px;" class="mx-auto"></canvas>
        </div>
    </div>
</div>


<?php include("footer.php") ?>