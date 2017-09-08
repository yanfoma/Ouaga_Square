@include('admin_header')

	<div id="section">
	<section><br>
	
     @include('admin_navbar')

<div id="content"> 
    <form action="c_projet_responsable" method="post">
    	<label>Identité du responsable du projet</label><br/>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    	<textarea name="responsable" required="required" placeholder="Saisir l'identité du responsable du projet"></textarea><br/>
        @if($errors->has('responsable'))
            {<span style="color:red">{!!$errors->first('responsable')!!}</span>}
        @endif
    	<input type="submit" name="save" value="Enregistrer" />
    </form>
    <div id="contenu_table">

    <table id="table" border="0px">
    	<tr>
    		<td></td>
    		<td>Responsable</td>
    	</tr>

        <?php
             $Responsable=DB::table('responsable')->orderBy('id', 'desc')->get();
            foreach($Responsable as $row)
            {?>
                <tr>
                    <td style="width:70px;background:rgb(255,218,218)"><strong>ID : <?php echo $row->id ?></strong></td>
                    <td style="background:rgb(244,237,144)"><?php echo $row->libelle ?></td>
                </tr>
        <?php } ?>
    </table>
    </div>
</div>
</section>
</div><br>

@include('admin_footer');