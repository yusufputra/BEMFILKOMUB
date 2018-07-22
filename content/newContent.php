<form action="#" method="post" name="input" enctype="multipart/form-data">
    <table border="0" cellpadding="0" style="width: 700px;">
 <tr>
 <td colspan="2"><h2>Input Berita</h2>
 </td>
   </tr>
 <tr>
         <td width="200">Judul</td>
            <td> 
                <input class="validate" name="nama" id="nama" size="30" type="text" placeholder="Tulis disini" />

        </td>
        </tr>
<tr>
  <tr>
         <td>Kategori</td>
            <td>       
            <select name="kategori" id="kategori" class = "browser-default">
              <option value=NULL>---Pilih---</option>
              <option value="beasiswa">Beasiswa</option>
              <option value="lomba">Lomba</option>
              <option value="karir">Karir</option>
              <option value="filkomjuara">Filkom Juara</option>
              <option value="suarakp">Suara KP</option>
              <option value="bemactivity">BEM Activity</option>
              <option value="kemahasiswaan">Kemahasiswaan</option>
            </select>
              <!-- <input name="kategori" size="30" type="text" placeholder="tambahkan lainnya"/></td> -->
<tr>
         <td>Tanggal</td>
            <td><input cols="30" name="tanggal" id="tanggal" class="datepicker" type="date" placeholder="Ketuk disini"></td>
        </tr>
<tr>
         <td>Isi Berita</td>
            <td> <textarea cols="50" name="isi" id="isi" rows="10" class="materialize-textarea"></textarea></td>
        </tr>
<tr>
        <td>Gambar</td>
            <td>
            <div class="file-field input-field">
            <div class="btn">
                <span>File</span>
                <input type="file" name="gambar" id="gambar">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
            </div>
            </td>
        </tr>
<tr>
         <td> </td>
            <td>

            <input class="waves-effect waves-light btn" name="submit" type="submit" value="submit" />

            <input class="waves-effect waves-light btn" name="reset" type="reset" value="Cancel" /></td>
        </tr>
</table>
</form>
