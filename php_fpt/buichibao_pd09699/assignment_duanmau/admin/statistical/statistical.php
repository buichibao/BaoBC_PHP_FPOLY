
<div class="cart convertContent">
  
    <article>
        <div class="grid">
            <div class="product_container">
                <div class="title">
                
                    <div class="item">ID</div>
                    <div class="item">Tên Danh Mục</div>
                    <div class="item">Số lượng</div>
                    <div class="item">Giá cao nhất</div>
                    <div class="item">Giá thấp nhất</div>
                    <div class="item">Giá trung bình</div>
                </div>
                <?php 
                if(is_array($result)){
                   foreach ($result as $item) {
                    extract($item)
                ?>
                <div class="title-list">
            
                    <div class="item"><?=$category_id?></div>
                    <div class="item"><?=$category_name?></div>
                    <div class="item"><?=$count_product?></div>
                    <div class="item"><?=$max_price?></div>
                    <div class="item"><?=$min_price?></div>
                    <div class="item"><?=$avg_price?></div>
                  
                </div>
                   
                <?php }
                } ?>
        </div>
    </article>
</div>

<div style="margin-left:50px;margin-top:-90px" id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Danh Mục', 'Số Lượng'],
  <?php 
  $tongdanhmuc = count($result);
  $i = 1;
  foreach ($result as $item) {
    extract($item);
    if($i==$tongdanhmuc) $dauphay=""; else $dauphay =",";
    echo  "['".$item['category_name']."',".$item['count_product']."]".$dauphay;
    $i++;
  }
  ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thống kê sản phẩm theo danh mục', 'width':1000, 'height':650};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
