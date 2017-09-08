@include('admin_header')

	<div id="section">
	<section><br>
	
     @include('admin_navbar')

<div id="content"> 
    <form action="c_projet_executeur" method="post">
    	<label>Identité de l'exécuteur</label><br/>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    	<input type="text" name="identite" required="required" placeholder="Saisir l'identité du responsable" /><br/>
        @if($errors->has('identite'))
            {<span style="color:red">{!!$errors->first('identite')!!}</span>}
        @endif
    	<label>Adresse de l'exécuteur</label><br/>
    	<input type="text" name="adresse" required="required" placeholder="Saisir l'adresse du responsable" /><br/>
        @if($errors->has('adresse'))
            {<span style="color:red">{!!$errors->first('adresse')!!}</span>}
        @endif
    	<input type="submit" name="save" value="Enregistrer" />
    </form>
    <div id="contenu_table">

    <table id="table" border="0px">
    	<tr>
    		<td></td>
    		<td>Identité</td>
    		<td>Adresse</td>
    	</tr>

        <?php
             $Executeur=DB::table('executeur')->orderBy('id', 'desc')->get();
            foreach($Executeur as $row)
            {?>
                <tr>
                    <td style="width:70px;background:rgb(255,218,218)"><strong>ID : <?php echo $row->id ?></strong></td>
                    <td style="background:rgb(244,237,144)"><?php echo $row->libelle ?></td>
                    <td style="background:rgb(244,237,144)"><?php echo $row->adresse ?></td>
                </tr>
        <?php } ?>
    </table>
    </div>
</div>
</section>
</div><br>

@include('admin_footer');