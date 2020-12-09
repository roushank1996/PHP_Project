<?php require 'header.php'; ?>
<div class="col-md-12 content">
    <p class="text-center">Pizzeria now gives you option to build your own pizza. Customize your pizza by choosing ingredients from the listgiven below.</p>
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-bordered">
            <thead>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Select</th>
            </thead>
            <tbody> 
                <?php
                $res = $conn->query("SELECT * FROM ingredient");
                while ($row = $res->fetch_object()) {
                    $item_name = $row->name;
                    ?>
                    <tr>
                        <td>
                            <img class="ingredient-image" src="assets/images/ingredients/<?php echo $row->image; ?>"/>
                        </td>
                        <td><b><?php echo $row->name; ?></b></td>
                        <td><?php echo @number_format($row->price, 2); ?></td>
                        <td class="select-item">
                            <input id="select_<?php echo $row->id; ?>" onchange="addItem('<?php echo $row->id; ?>', '<?php echo $row->price; ?>')" type="checkbox" name="select[]" value="<?php echo $row->id; ?>"/> Add</td>
                    </tr>
                    <?php
                }
                ?>   
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4"><div class="total">Total Cost : <span id="total">00.00</span></div></di></td>
                </tr>
                <tr>
                    <td colspan="4" align="center">
                        <input onclick="orderPizza()" class="btn btn-primary" type="submit" name="submit" id="submit" value="Build Pizza"/>                        
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<script type="text/javascript">
    var total = 0;
    var aPrice = [];
    function addItem(item_id, price) {
        var checkbox=document.getElementById("select_"+item_id);
        if(checkbox.checked){
             aPrice.push(price);
        }else{
             aPrice.pop(price);
        }
        total = aPrice.reduce(function (a, b) {
            return parseInt(a) + parseInt(b);
        }, 0);
        document.getElementById("total").innerHTML = total.toFixed(2);
    }
    
    function orderPizza(){
        window.location='<?php echo $base_url?>order-success.php';
    }
</script>
<?php require 'footer.php'; ?>