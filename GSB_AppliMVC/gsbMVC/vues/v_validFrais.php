<div id="contenu">

  <form name="formValidFrais" method="post" action="enregValidFrais.php">
      
      <h1> Validation des frais par visiteur </h1>
      
      <label class="titre">Choisir le mois :</label>
      
      <select name="listmois" id="listmois" class="zone" onchange="showUser(this.value)">

        <option value="0.0">-- sélectionner mois --</option>

        <?php
            
            foreach ($moiVis as $mi)
            {
          
               echo"<option value=".$mi['idVisiteur'].">

                  ".$mi['mois']."

                </option>";    
  
            }
        ?>

    
      </select>     
      
      <label class="titre">le visiteur :</label>

      <div id="visiteur" >

      <select name="listVisiteur" id="listVisiteur" class="zone">


        <!--<?php/*
            
            foreach ($vis as $v)
            {
          
               echo"<option>

                  ".$v['nom']."

                </option>";    
  
            }*/
        ?>-->

    
      </select>

      </div>   
    
      <p class="titre" />
      
      <div style="clear:left;"><h2>Frais au forfait </h2></div>
      
      <table class="listeLegere">
          <tr>
              <th>Repas midi</th>
              <th>Nuitée </th>
              <th>Etape</th>
              <th>Km </th>
              <th>Situation</th>
          </tr>

          <tr align='center'>

          <?php
            
            foreach ($infoFr as $v)
            {
          ?> 
                    
                    
                      <?php if($v['idfrais'] == "REP"){?>
                      <td>
                        <input type="text" class="zone" size="4" name="hcMontant" value="<?php echo $v['quantite']; ?>"/>
                      </td>
                      <?php } ?>
                      <?php if($v['idfrais'] == "NUI"){?>
                      <td>
                        <input type="text" class="zone" size="4" name="hcMontant" value="<?php echo $v['quantite']; ?>"/>
                      </td>
                      <?php } ?>
                      <?php if($v['idfrais'] == "ETP"){?>
                      <td>
                        <input type="text" class="zone" size="4" name="hcMontant" value="<?php echo $v['quantite']; ?>"/>
                      </td>
                      <?php } ?>
                    <?php if($v['idfrais'] == "KM"){?>
                      <td>
                        <input type="text" class="zone" size="4" name="hcMontant" value="<?php echo $v['quantite']; ?>"/>
                      </td>
                      <?php } ?>  
        <?php
            }
        ?>

                      <td class='action'> 
                          <select size='3' name='hfSitu1'>
                            <option value='E'>Enregistré</option>
                            <option value='V'>Validé</option>
                            <option value='R'>Remboursé</option>
                          </select>
                      </td>  

         </tr> 
    </table>
    
    <p class="titre" />
    <div style="clear:left;">
      <h2>Hors Forfait</h2>
    </div>
    
    <table class="listeLegere">
        
        <tr>
            <th class="date">Date</th>
            <th class="libelle">Libellé </th>
            <th class="montant">Montant</th>
            <th class="action">Situation</th>
        </tr>
        
        <tr align='center'>
        <?php
            
            foreach ($infoHF as $v)
            {
          
          ?>
               
                    
                      <td class="date"><input type="text" class="zone" size="4" name="hcMontant" value="'.<?php echo $v['date']; ?>.'"/></td>
                      <td class='libelle'><input type="text" class="zone" size="4" name="hcMontant" value="'.<?php echo $v['libelle']; ?>.'"/></td> 
                      <td class='montant'><input type="text" class="zone" size="4" name="hcMontant" value="'.<?php echo $v['montant']; ?>.'"/></td>
      
        <?php
          }
        ?>
                      <td class='action'> 
                          <select size='3' name='hfSitu1'>
                            <option value='E'>Enregistré</option>
                            <option value='V'>Validé</option>
                            <option value='R'>Remboursé</option>
                          </select>
                      </td>
        </tr> 
    </table>    
    
    <p class="titre" />
    <div style="clear:left;">
      <h2>Hors Classification</h2>
    </div>
    <table class="listeLegere">
        
        <tr>
            <th>Nb justificatifs</th>
            <th class="montant">Montant</th>
            <th class="action">Situation</th>
        </tr>

        <tr>
              <td><input type="text" class="zone" size="4" name="hcMontant" value="<?php echo $justi;?>"/></td>
              <td></td>
              <td> 
                <select size='3' name='hfSitu1'>
                    <option value='E'>Enregistré</option>
                    <option value='V'>Validé</option>
                    <option value='R'>Remboursé</option>
                </select>
              </td>
        </tr>

    </table>
    <p class="titre" /><label class="titre">&nbsp;</label><input class="zone"type="reset" /><input class="zone"type="submit" />
  
  </form>
</div>
