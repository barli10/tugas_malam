<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>TUGAS_WEBII</title>
    </head>
    <style>
        body {
            color: orange;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .form {
            display: flex;
            justify-content: center;
            margin-top: 3rem;
        }
        form {
            background: #E0ffff;
            border-radius: 2rem;
            padding: 2rem;
        }
        input[type=text] {
            box-sizing: border-box;
            color: orange;
            width: 100%;
            padding: 2px 0.7rem;
            font-size: 12pt;
            border: none;
            border-bottom: solid 2px #C71585;
            background-color: transparent;
            transition: 0.5s;
        }
        input[type=text]:focus {
            border: none;
            border-bottom: solid 2px white];
            outline: none;
        }
        textarea {
            background: transparent;
            border: solid 2px #C71585;
            padding: 0.5rem 0.7rem;
            transition: 0.5s;
            border-radius: 4px;
            width: 100%;
            color: orange;
            font-size: 12pt;
            resize:vertical
        }
        textarea:focus {
            border: solid 2px orange;
            outline: none;
        }
        select {
            border: none;
            background-color: #000000;
            color: white;
            border-radius: 4px;
            font-size: 12pt;
            padding: 0.5rem 0.7rem;
        }
        button[type=button] {
            background-color: #000000;
            font-size: 12pt;
            padding: 0.5rem;
            border-radius: 4px;
            border: solid 2px transparent;
            color: White;
            cursor: pointer;
        }
        button[type=button]:focus {
            border: solid 2px white;
        }
        tr {
            height: 2.5rem;
        }
    </style>
    <body>
       <h2>Silakan Mengisi data Anda!</h2>
           <form method='post'action="aksi.php">
               <table>
                    <tr>
                        <td colspan="3" align="center"><b>Profil Diri</b></td>
                    </tr>
                   <tr>
                       <td>Masukkan NIM Anda</td>
                       <td>:</td>
                       <td><input type='text' name='nim'></td>
                   </tr>
                   <tr>
                       <td>Masukkan Nama</td>
                       <td>:</td>
                       <td><input type='text' name='nama'></td>
                   </tr>
                   <tr>
                       <td>Masukkan Gender</td>
                       <td>:</td>
                       <td>
                           <input type='radio' name='gender' id='laki-laki' value='Laki-laki'> <label for='laki-laki'>Laki-laki</label> 
                           <input type='radio' name='gender' id='wanita' value='Wanita'> <label for='wanita'>Wanita</label>
                        </td>
                   </tr>
                   <tr>
                        <td>Masukkan Status</td>
                        <td>:</td>
                        <td>
                            <select name='status'>
                                <option value='Belum Menikah'>Belum menikah</option>
                                <option value='Menikah'>Menikah</option> 
                            </select>
                        </td>
                   </tr>
                   <tr>
                       <td>Masukkan no HP</td>
                       <td>:</td>
                       <td><input type='text' name='tlpn'></td>
                   </tr>
                   <tr>
                       <td>Masukkan Alamat</td>
                       <td>:</td>
                       <td><textarea name='alamat'></textarea></td>
                   </tr>
                   <tr> 
                    <td><button type="Submit" name="submit" value="sumbit">Kirim</button></td>
                </tr>
               </table>
           </form>
       </div> 
    </body>
</html>