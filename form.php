<form action="formproses.php" method="post">
    <table>
    <th><h3>Silahkan Isi Data Dibawah Ini</h3></th>
        <tr>
            <td>Nim</td>
            <td>:</td>
            <td><input type="text" name="nim" id="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><select name="kelas">
                    <option value="D3MI4101"name="D3MI4101">D3MI-41-01</option>
                    <option value="D3MI4102"name="D3MI4102">D3MI-41-02</option>
                    <option value="D3MI4103"name="D3MI4103">D3MI-41-03</option>
                    <option value="D3MI4104"name="D3MI4104">D3MI-41-04</option>
                </select></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tgl" id="tgl"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>
