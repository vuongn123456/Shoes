<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Add product</div>
            </div>

            <form action="" name="frm_create_student" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required class="form-control" name="name" id="name" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" required class="form-control" name="quantity" id="quantity" placeholder="Enter quantity">
                    </div>

                    <div class="form-group">
                        <label for="product_sold">Product Sold</label>
                        <input type="text" required class="form-control" name="product_sold" id="product_sold" placeholder="Enter product sold">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" required class="form-control" name="description" id="description" placeholder="Enter description">
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category">
                            <?php
                            foreach ($categorys as $category) {
                                ?>
                                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <select class="form-control" id="brand" name="brand">
                            <?php
                            foreach ($brands as $brand) {
                                ?>
                                <option value="<?= $brand['id'] ?>"><?= $brand['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sale">Sale</label>
                        <input type="text" required class="form-control" name="sale" id="sale" placeholder="Enter sale">
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" required class="form-control" name="price" id="price" placeholder="Enter price">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" required class="form-control" name="status" id="status" placeholder="Enter status">
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="text" required class="form-control" name="image" id="image" placeholder="Enter image">
                    </div>


                </div>
                <div class="card-action">
                    <button class="btn btn-success" name="create_product" type="submit">Create</button>
                    <button class="btn btn-danger" type="reset">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
