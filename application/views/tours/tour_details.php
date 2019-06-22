<script src='https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js'></script>
<script>
var base64Img = null;
imgToBase64('../assets/images/Mango-Holidays.png', function(base64) {
    base64Img = base64; 
});

margins = {
  top: 70,
  bottom: 40,
  left: 30,
  width: 550
};

generate = function()
{
    var content = document.getElementById('PDFcontent');
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(18);
    pdf.fromHTML(document.getElementById('PDFcontent'), 
        margins.left, // x coord
        margins.top,
        {
            // y coord
            width: margins.width// max width of content on PDF
        },function(dispose) {
            headerFooterFormatting(pdf, pdf.internal.getNumberOfPages());
        }, 
        margins);
        
    var iframe = document.createElement('iframe');
    iframe.setAttribute('style','position:absolute;right:0; top:0; bottom:0; height:100%; width:650px; padding:20px;');
    // document.body.appendChild(iframe);
    
    iframe.src = pdf.output('save', 'filename.pdf');
};

function headerFooterFormatting(doc, totalPages)
{
    for(var i = totalPages; i >= 1; i--)
    {
        doc.setPage(i);                            
        //header
        header(doc);
        
        footer(doc, i, totalPages);
        doc.page++;
    }
};

function header(doc)
{
    doc.setFontSize(20);
    doc.setTextColor(40);
    doc.setFontStyle('bold');
    
    if (base64Img) {
       //doc.addImage(base64Img, 'PNG', margins.left, 10, 100,50);        
       doc.addImage(base64Img, 'PNG', 0, 10, 100, 50);        
    }
        
    doc.text("Mango Holidays Tour Itenary", margins.left + 60, 40 );
    doc.setLineCap(2);
    doc.line(3, 70, margins.width + 43,70); // horizontal line
};

// You could either use a function similar to this or pre convert an image with for example http://dopiaza.org/tools/datauri
// http://stackoverflow.com/questions/6150289/how-to-convert-image-into-base64-string-using-javascript
function imgToBase64(url, callback, imgVariable) {
 
    if (!window.FileReader) {
        callback(null);
        return;
    }
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'blob';
    xhr.onload = function() {
        var reader = new FileReader();
        reader.onloadend = function() {
            imgVariable = reader.result.replace('text/xml', 'image/jpeg');
            callback(imgVariable);
        };
        reader.readAsDataURL(xhr.response);
    };
    xhr.open('GET', url);
    xhr.send();
};

function footer(doc, pageNumber, totalPages){

    var str = "Page " + pageNumber + " of " + totalPages
   
    doc.setFontSize(10);
    doc.text(str, margins.left, doc.internal.pageSize.height - 20);
    
};

 </script>

  <script>

 var doc = new jsPDF(); 
var specialElementHandlers = { 
    '#editor': function (element, renderer) { 
        return true; 
    } 
};
$('#submit').click(function () { 
    doc.fromHTML($('#html-2-pdfwrapper').html(), 15, 15, { 
        'width': 190, 
            'elementHandlers': specialElementHandlers 
    }); 
    doc.save('sample-page.pdf'); 
});

</script>


  <?php 
        
            if(isset($itenary)){
                $itenary_program='<div style="border: 1px solid #ccc;margin: 2%;padding: 2%;">';
                foreach($itenary as $itenary_key){

                        $itenary_program .="<h3 style='font-size:20px'> Day  ".$itenary_key->DayNo." : ".$itenary_key->DayTitle."</h3>";
                        $itenary_program .="<p>".mb_convert_encoding($itenary_key->DayProgram,'UTF-8')."</p>";
            }}
                $itenary_program .='</div>';
                
        ?>
<div id='PDFcontent'>

    <p><?php echo $itenary_program;?></p>

</div>

<div id='ignoreContent'  style="display: none">

<p>Only for display and not in pdf</p>

</div>

<button id='gpdf'>Generate PDF</button>
<script type="text/javascript">
    
    var pdfdoc = new jsPDF();
var specialElementHandlers = {

'#ignoreContent': function (element, renderer) {

return true;

}

};

 

$(document).ready(function(){

$('#gpdf').click(function(){

pdfdoc.fromHTML($('#PDFcontent').html(), 10, 10, {

'width': 150,

'elementHandlers': specialElementHandlers

});

pdfdoc.save('First.pdf');

});});

 
</script>
<button onclick="generate()">Generate PDF</button>
<div class="page-title-container">
    <div class="container-tour-heading">
        <div class="page-title pull-left">
          <h2 class="entry-title"><?php echo @$ProductTitle;?></h2>
        </div>
        <!-- <ul class="breadcrumbs pull-right">
            <li><a href="#">Group Tour</a></li>
            <li><a href="tour-main.html">Europe</a></li>
            <li class="active">Exotic Europe</li>
        </ul> -->
    </div>
</div>
<!-- Start BLog Section -->
<section class="blog-single-pages portfolio tour-content">
        <div class="page-header-container">
            <img src="<?php echo base_url().'assets/'.$slider_image; ?>"  alt="slider_image">
          <div class="post-blog-item">

            <div class="date-mate">
                    <h6>Days<span><?php echo $Days; ?></span></h6>
                    <h6 class="nights">Nights<span><?php echo $Nights; ?></span></h6>
            </div>
            </div>
        </div>


      
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-9">
                        <div class="post-blog-item tour-info">
                                <div class="post-blog-content">
                                       
                                    <!-- <h4 class="mb-20"><a href="#">Tour Details 1</a></h4> -->
                                    <section class="tabs-style-five verticle-tab">
                                        <div class="row">
                                                <div class="col-lg-12">
                                                <div class="content-button">
                                                        <ul class="list-inline">
                                                            <?php $filename="file.pdf" ;
                                                            $data ="tt";
                                                            ?>
                                                                <li><i class="fa fa-envelope-o"></i> <a href="#"> Send Enquiry</a> &nbsp;| </li>
                                                                <li><i class="fa fa-print" aria-hidden="true"></i> <a href="#"> Print</a>&nbsp; | </li>
                                                                <li><button onclick="generate()"><i class="fa fa-download" aria-hidden="true"></i>Download</button></li>
                                                            </ul>  
                                                </div> 
                                                </div>
                                              <div class="col-lg-12 column-margin">
                                                    <div>
                                                    <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active"><a href="#tab-item-one" aria-controls="tab-item-one" role="tab" data-toggle="tab"><i class="fa fa-anchor" aria-hidden="true"></i>Itinerary</a></li>
                                                            <li role="presentation"><a href="#tab-item-two" aria-controls="tab-item-two" role="tab" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i>Highlights</a></li>
                                                            <li role="presentation"><a href="#tab-item-three" aria-controls="tab-item-three" role="tab" data-toggle="tab"><i class="fa fa-suitcase" aria-hidden="true"></i>Inclusion / Exclusion</a></li>
                                                            
                                                        </ul>
                                                    <!-- Tab panes -->
                                                    
                                                       <div class="tab-content">
                                                           
                                                            <div role="tabpanel" class="tab-pane fade in active" id="tab-item-one">
                                                                    <div class="row">
                                                                            <div class="col-lg-12">
                                                                                    <div class="tab-tour-info">
                                                                                <h4><b>Tour Itinerary</b></h4>
                                                                                        <div class="small-border"></div>
                                                                                    </div>
                                                                            <ul id='timeline1'>
                                                                                <?php 
                                                                                if(isset($itenary)){
                                                                                    foreach($itenary as $key){?>
                                                                                <li class='work'>
                                                                                    <div class="relative">
                                                                                       
                                                                                        <span class='date'>Day<?php echo $key->DayNo;?></span>
                                                                                        <span class='circle'></span>
                                                                                    </div>
                                                                                    <div class='content'>
                                                                                        <h5><?php echo $key->DayTitle;?></h5>
                                                                                        <p>
                                                                                            <?php echo $key->DayProgram;

                                                                                          
                                                                                            ?>
                                                                                                
                                                                                            </p>
                                                                                    </div>
                                                                                </li>
                                                                                <?php }} ?>
                                                                            </ul>
                                                                            </div>
                                                                        </div> 
                                                                </div>
                                                            <div role="tabpanel" class="tab-pane fade" id="tab-item-two">
                                                                
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane fade" id="tab-item-three">
                                                                    <div class="tab-tour-info">
                                                                            <h4><b>Inclusion :</b></h4>
                                                                            <div class="small-border"></div>
                                                                            <ul>
                                                                              <?php 

                                                                                foreach ($Inclusions as $InclusionsItem ) { ?>
                                                                                <li>
                                                                                  <?php echo $InclusionsItem->InclusionItem;
                                                                                  }
                                                                                ?>
                                                                                </li>
                                                                            </ul> 
                                                                                    
                                                                                    <h4><b>Exclusion :</b></h4>
                                                                                    <div class="small-border"></div>
                                                                                    <ul>
                                                                                      <?php 

                                                             foreach ($Exclusions as $ExclusionsItem ) { ?>
                                                              <li>
                                                                <?php echo $ExclusionsItem->ExclusionItem;
                                                                   }
                                                                ?>
                                                              </li>        
                                                                                    </ul>
                                                                                            

                                                                    </div>    
                                                            </div>
                                                            
                                                       </div>
                                                    </div>
                                              </div>
                                            </div>
                                           
                                </section>
                                </div> 
                                </div>  
                </div>
                <div class="col-md-3 sidber clearfix">
                    <div class="widget bdr-pry-color">
                            <div class="wiget-title" style="margin-bottom:0;">
                                   
                                    <h4>Tour Dates & Availability</h4>
                                    <p>(Click on tour to view details)</p>
                                </div>
                                <div class="table-style-three" style="padding-bottom: 0;">
                                            <div class="row"> 
                                                <div class="col-md-12"> 
                                                      
                                                    <div class="tour-table">
                                                       
                                                            <table class="table table-striped table-dark">
                                                                    <thead class="thead-dark">
                                                                        <tr>
                                                                        <th scope="col">Tour Code &<br>Departure Dates
                                                                          </th><th scope="col">Prices</th>
                                                                        </tr>
                                                                      </thead>
                                                                   
                                                                      <tbody>
                                                                        <?php 
                                                                            if(isset($UpcomingTours)){
                                                                                foreach ($UpcomingTours as $tours){
                                                                                foreach($tours->UpcomingTourPricingDetails as $pricedetails){
                                                                                    if(($tours->TourStatus)=='Open'){
                                                                        ?>
                                                                            <tr class="tour_info" data-tourcode="<?php echo $tours->TourCode; ?>" style="cursor: pointer;">
                                                                              <td><?php  echo $tours->TourCode; ?>
                                                                                <span class="hlights">
                                                                                  <?php  echo $tours->DepartureDate; ?>
                                                                                </span>
                                                                                    <br/>
                                                                                  <?php  echo $pricedetails->StartingLocation; 
                                                                                ?>  
                                                                              </td>
                                                                              <td>
                                                                                <span class="hlights">
                                                                                  INR <?php echo $pricedetails->TotalINRValue; ?>
                                                                                </span>
                                                                              </td>
                                                                            </tr>
                                                                          <?php }}}} ?>
                                                                        
                                                                      </tbody>
                                                                </table>
                                                </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                    </div>
                    <!-- // End Widget -->
                </div>
               

                        
                
            </div>
            
        </div>
    </section>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background: #FF6600;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="color:#fff;">Package Details</h4>
            </div>
            <!--<div class="modal-body">
              <p>This is a large modal.</p>
            </div>-->
          <div class="modal-body">
                <h5 style="text-align: center">Tour Price & Dates Availablity</h5>
                <h4 style="color:#FF6600;">Tour Code: E1020419</h4>
                <table class="table-striped table-bordered">
                    <thead>
                    <tr class="row-1 odd" role="row"><th class="column-1 sorting_disabled" rowspan="1" colspan="1" style="width: 116px;">CURRENCY</th><th class="column-2 sorting_disabled" rowspan="1" colspan="1" style="width: 119px;">TWIN SHARING</th><th class="column-3 sorting_disabled" rowspan="1" colspan="1" style="width: 129px;">TRIPLE SHARING</th><th class="column-4 sorting_disabled" rowspan="1" colspan="1" style="width: 153px;">SINGLE OCCUPANCY</th><th class="column-5 sorting_disabled" rowspan="1" colspan="1" style="width: 130px;">CHILD WITH BED</th><th class="column-6 sorting_disabled" rowspan="1" colspan="1" style="width: 110px;">CHILD NO BED</th><th class="column-7 sorting_disabled" rowspan="1" colspan="1" style="width: 84px;">INFANT</th></tr>
                    </thead>
                    <tbody class="row-hover">
                    
                    
                    
                    
                    <tr>
                    <td>FIRST 10 SEATS</td>
                    <td>(12 yrs &amp; above)</td>
                    <td>(12 yrs &amp; above)</td>
                    <td class="column-4">(12 yrs &amp; above)</td>
                    <td class="column-5">(2 to 11 yrs)</td><td class="column-6">(2 to 11 yrs)</td><td class="column-7">(0 to 2 yrs)</td>
                    </tr><tr class="row-3 odd" role="row">
                    <td class="column-1">INR</td><td class="column-2">75000</td><td class="column-3">75000</td><td class="column-4">75000</td><td class="column-5">71250</td><td class="column-6">71250</td><td class="column-7">22500</td>
                    </tr><tr class="row-4 even" role="row">
                    <td class="column-1">EURO</td><td class="column-2">2678</td><td class="column-3">2658</td><td class="column-4">3733</td><td class="column-5">2150</td><td class="column-6">1755</td><td class="column-7">436</td>
                    </tr><tr class="row-5 odd" role="row">
                    <td class="column-1">TOTAL IN INR</td><td class="column-2">295721</td><td class="column-3">294072</td><td class="column-4">382674</td><td class="column-5">248453</td><td class="column-6">215897</td><td class="column-7">58435</td>
                    </tr></tbody>
                    </table>
                    <br/>
                    <p>
                        Tour price is calculated at 1 Euro = INR 82.42/-. Tour price variations are expected depending on the prevailing conversion rate. Payment in Euros to be calculated on the prevailing rate of exchange of Euros -> INR on the day of actual payment to Mango Holidays.<br/>
                        Tour Price STARTING FROM: Rs.2,95,721/-* per adult on twin sharing basis!<br/>
                        <br/>
                        **Prices increase as seats get filled.**
                        <br/>
                    </p>
              
          </div>
          <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
        </div>
      </div>
    </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

 <script type="text/javascript">
   
  $(function(){
      
    $(".tour_info").click(function(){
      var tour_code = $(this).attr('data-tourcode');


      var url= "http://203.112.144.254:8888/WebsiteData/WebsiteDataService.svc/GetTourPricingDetailForWebsite?TourCode="+tour_code;

      $.ajax({
          url:url,
          type:'GET',
          headers:
          {
            'UserName':'mhwebsite',
            'Password':'mango'
          },
          username:'mhwebsite',
          password:'mango',
          success:function(res){
          var result = JSON.parse(JSON.stringify(res));
                console.log(result);
                var main_body = '<h4 style="text-align: center; text-transform: none;">Tour Price & Dates Availablity</h4><h3 style="color:#FF6600;">Tour Code: '+res.TourCode+'</h3>';
                var body_content = '<table class="table-striped table-bordered">'+
                '<thead>'+
                '<tr>'+
                '<th rowspan="1" colspan="1" style="width: 120px;">CURRENCY</th>'+
                '<th rowspan="1" colspan="1" style="width: 120px;">TWIN SHARING</th>'+
                '<th rowspan="1" colspan="1" style="width: 120px;">TRIPLE SHARING</th>'+
                '<th rowspan="1" colspan="1" style="width: 150px;">SINGLE OCCUPANCY</th>'+
                '<th rowspan="1" colspan="1" style="width: 120px;">CHILD WITH BED</th>'+
                '<th rowspan="1" colspan="1" style="width: 120px;">CHILD NO BED</th>'+
                '<th rowspan="1" colspan="1" style="width: 120px;">INFANT</th>'+
                '</tr>'+
                '</thead>'+
                '<tbody>'+
                '<tr>'+
                '<td>'+
                '</td>'+
                '<td>(12 yrs &amp; above)</td>'+
                '<td>(12 yrs &amp; above)</td>'+
                '<td>(12 yrs &amp; above)</td>'+
                '<td>(2 to 11 yrs)</td>'+
                '<td>(2 to 11 yrs)</td>'+
                '<td>(0 to 2 yrs)</td>'+
                '</tr>'+
                '<tr>'+
                '<td>INR</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[0].Amount1+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[1].Amount1+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[2].Amount1+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[3].Amount1+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[4].Amount1+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[5].Amount1+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>EURO</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[0].Amount2+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[1].Amount2+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[2].Amount2+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[3].Amount2+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[4].Amount2+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[5].Amount2+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>TOTAL IN INR</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[0].TotalINRValue+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[1].TotalINRValue+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[2].TotalINRValue+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[3].TotalINRValue+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[4].TotalINRValue+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[5].TotalINRValue+'</td>'+
                '</tr>'+
                '</tbody>'+
                '</table>'+
                '<br/>'+
                '<p>Tour price is calculated at '+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1SellingRate+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2+'='+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1+' '+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2SellingRate+'/-.</p>'+
                '<p> Tour price variations are expected depending on the prevailing conversion rate. Payment in Euros to be calculated on the prevailing rate of exchange of Euros -> INR on the day of actual payment to Mango Holidays.</p>'+
                '<p>Tour Price STARTING FROM: Rs.2,95,721/-* per adult on twin sharing basis!</p>'+
                '<p><b>**Prices increase as seats get filled.**</b></p>';
                $(".modal-body").html("");
                $(".modal-body").html(main_body+body_content);
                $("#myModal").modal('show');

          }
      });
    });

  });
 </script>
