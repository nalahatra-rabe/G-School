<link rel="stylesheet" href="http://localhost/G-School/public/assets/css/add_notes.css" />
<div class="AjoutNotes">
        <div class="filtre">
            <h4>Ajout des notes</h4>
            <button type="button" class="btn_validation">Valider</button>
            <div class="filtre_items">
                <h3>Mention:</h3>
                <select name="" id="">
            <option value="">DA2I</option>
            <option value="">RPM</option>
            <option value="">AES</option>
          </select>
            </div>

            <div class="filtre_items">
                <h3>Niveau actuelle:</h3>
                <select name="" id="">
            <option value="">L1</option>
            <option value="">L2</option>
            <option value="">L3</option>
            <option value="">M1</option>
            <option value="">M2</option>
          </select>
            </div>
            <div class="filtre_items">
                <h3>Matiere:</h3>
                <select name="" id="">
            <option value="">PHP</option>
            <option value="">JAVASCRIPT</option>
            <option value="">ANGLAIS</option>
          </select>
            </div>
        </div>
        <div class="notes">
            <div class="search">
                <i class="fa fa-search"></i>
                <input type="text" id="add_note_search" onkeyup="searchNote()" placeholder="Recherche ... " />
                <button type="btn" class="check" style="  
                    padding: 13px 20px;
                    border: 0;
                    background: #2a9d8f;
                    color:#fff;
                        margin-left:30px;
                        transform:translateY(-15px);   
                    ">Enregistrer
                </button>
            </div>
            <table border="1" class="heading_table">
                <!-- table heading -->
                <tr class="tb_heading">
                    <th class="matricule">M</th>
                    <th>Nom et Prenoms</th>
                    <th class="note">notes</th>
                </tr>
            </table>
            <div class="all_notes">
                <table border="1" id="myTable">
                    <!-- table content -->
                    <tr class="etu_note">
                        <td>4676</td>
                        <td>RABEHEVITRA Fitiavana Nalahatra</td>
                        <td>
                            <input type="number" value="0" />
                        </td>
                    </tr>
                    <tr class="etu_note">
                        <td>4718</td>
                        <td>RAFALIMANANA Jeans Sebastien</td>
                        <td>
                            <input type="number" />
                        </td>
                    </tr>
                    <tr class="etu_note">
                        <td>4603</td>
                        <td>SOLOFONARINDRA Herinantenaina</td>
                        <td>
                            <input type="number" />
                        </td>
                    </tr>
                    <tr class="etu_note">
                        <td>4003</td>
                        <td>RAHARSIMANANA Andry Nirina</td>
                        <td>
                            <input type="number" />
                        </td>
                    </tr>
                    <tr class="etu_note">
                        <td>4624</td>
                        <td>RAKOTORINRINA Fifaliana</td>
                        <td>
                            <input type="number" />
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- java script link -->
    <script src="http://localhost/G-School/public/assets/js/app.js"></script>