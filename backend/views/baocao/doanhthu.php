<?php 

$this->title="Doanh thu";
$this->params['breadcrumbs'][] = $this->title;

?>

<div id="doanhthu">
	<h3>Doanh thu bán sản phẩm</h3>

	Tháng: <input type="number" name="month" id="month"> Năm: <input type="number" name="year" id="year" > <a href="javascript:void(0)" onclick="doanhthu();"> In báo cáo</a>
	<div id="report-doanhthu">
		<br/>
		<div class='table-responsive'><table class='table'><tr><td>STT</td><td>Mã Hóa đơn</td><td> Ngày đặt Hàng</td><td>Tiền đơn hàng</td> <td>Xem chi tiết đơn hàng</td></tr></table></div>
	</div>
</div>


<script>
	var date = new Date();
	var url1="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/";
	function doanhthu()
	{
		var months=$("#month").val();
		var years=$("#year").val();
		var yearsnow=date.getFullYear();

		console.log(months+years+yearsnow);
         $.ajax({
          
        url : url1+"baocao/doanhthu",// gửi ajax đến file result.php
        type : "post", // chọn phương thức gửi là post
        dateType:"jsonp", // dữ liệu trả về dạng text
        data : { // Danh sách các thuộc tính sẽ gửi đi
             month : months,
             year:years,
             yearnow:yearsnow,
       	},
        success : function (result){
            var data=jQuery.parseJSON(result);
            var i;
           var tongtien=0;
            var out = "<br/><div class='table-responsive'><table class='table'><tr><td>STT</td><td>Mã Hóa Đơn</td><td>Ngày Đặt Hàng</td><td> Tiền đơn hàng </td> <td>Xem chi tiết đơn hàng</td></tr>";
			    for(i =0; i<data.length; i++) {
                    tongtien+= parseInt(data[i].TongTien);
			        out += "<tr><td>"+(i+1)+"</td><td>"+
			        data[i].MaDonHang +
			        "</td><td>" +
			        formatDate(data[i].NgayDatHang)+
			        "</td><td algin='center'>" +
			        formatnumber(data[i].TongTien)+" đ" +
			        "</td> <td><a href='"+url1+"chitiethoadon?id="+ data[i].MaDonHang+"' title=''>xem chi tiết</a></td></tr>";
			    }
			    out+="<tr> <td colspan='3' algin='right'>Tổng Tiền</td> <td colspan='2'>"+formatnumber(tongtien)+" đ"+"</td> </tr>";
			    out += "</table></div>";
            $("#report-doanhthu").html(out);
		}

    });






		}
function formatnumber(nStr)
{
    nStr += '';
    var x = nStr.split('.');
    var x1 = x[0];
    var x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}
function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [ day,month,year].join('-');
}

	</script>