<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    List Product <br/>
                    <a href="?page=admin&method=create" class="btn btn-primary">Add product</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table mt-3">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Sale</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $count = 0;
                    foreach ($results as $result) {
                    ?>
                        <tr>
                            <td><?= ++$count ?></td>
                            <td><?= $result['name'] ?></td>
                            <td><?= $result['quantity'] ?></td>
                            <td><?= $result['sale'] ?></td>
                            <td><?= number_format($result['price']); ?></td>
                            <td><?= $result['status'] ?></td>
                        </tr>

                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
