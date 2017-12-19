<form class="form-horizontal">
  <fieldset class="content-group">
    <div class="form-group">
      <label class="control-label col-lg-4"><h2>Kontak Lembaga</h2></label>
      <div class="col-lg-12">
          @if (count($data)!=0)
            <div class="row">
              <div class="form-group">
                <label class="control-label col-lg-3 text-right">Alamat</label>
              <div class="col-lg-9" style="padding-top:8px;font-weight:bold;">{{$data[0]->alamat}}</div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label class="control-label col-lg-3 text-right">Telepon</label>
                <div class="col-lg-9" style="padding-top:8px;font-weight:bold;">{!!str_replace(',','<br>',$data[0]->telepon)!!}</div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label class="control-label col-lg-3 text-right">Email</label>
              <div class="col-lg-9" style="padding-top:8px;font-weight:bold;">{!!str_replace(',','<br>',$data[0]->email)!!}</div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label class="control-label col-lg-3 text-right">Facebook</label>
              <div class="col-lg-9" style="padding-top:8px;font-weight:bold;">{!!str_replace(',','<br>',$data[0]->facebook)!!}</div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label class="control-label col-lg-3 text-right">Twitter</label>
              <div class="col-lg-9" style="padding-top:8px;font-weight:bold;">{!!str_replace(',','<br>',$data[0]->twitter)!!}</div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label class="control-label col-lg-3 text-right">Instagram</label>
              <div class="col-lg-9" style="padding-top:8px;font-weight:bold;">{!!str_replace(',','<br>',$data[0]->instagram)!!}</div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label class="control-label col-lg-3 text-right">Maps</label>
              <div class="col-lg-9" style="padding-top:8px;font-weight:bold;">&nbsp;</div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12" id="maps">
                <div id="map_wrapper">
                  <div id="map_canvas"></div>
                </div>
              </div>
            </div>
          @php
            $id=$data[0]->id;
            list($lat,$long)=explode(',',$data[0]->maps);
            $alamat=$data[0]->alamat;
          @endphp
        @else
          <center>
            Data Contact Masih Kosong<br>
            Silahkan Di Tambah Terlebih Dahulu
            <br>
            <button class="btn btn-primary btn-xs btn-shadowed" type="button" onclick="bukaform(-1)"><i class="icon-diff-added"></i>&nbsp;&nbsp;Tambah Data Contact</button>
          </center>
          @php
            $id=-1;
            $lat=$long=0;
            $alamat='';
          @endphp
        @endif
      </div>
    </div>
    @if($id!=-1)
    <div class="form-group">
      <div class="text-right">
        <button type="button" onclick="bukaform({{$id}})" class="btn btn-primary btn-xs btn-shadowed"><i class="icon-pencil5"></i>&nbsp;&nbsp;Edit</button>
      </div>
    </div>
    @endif
  </fieldset>
</form>
<script>
$(document).ready(function(){
  siteccit();
});
function bukaform(id)
{
  edit(id);
}
function siteccit()
{
  var latt=parseFloat('{{$lat}}');
  var longg=parseFloat('{{$long}}');
  if(latt!='0')
  {
    var uluru = {lat: latt, lng: longg};
    var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading" style="text-align:center">Badan Layanan Pengadaan (BLP) Barang dan Jasa Kota Depok</h1>'+
      '<div id="bodyContent"  style="text-align:center">'+
      '<p>{{$alamat}}</p>'+
      '</div>'+
      '</div>';
    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

      var map = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 17,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });

      infowindow.open(map,marker);
  }
}
</script>
<style>
#map_wrapper {
  height: 450px;
  padding:10px;
  border:solid #ddd 1px;
  }

  #map_canvas {
      width: 100%;
      height: 100%;
  }
</style>
