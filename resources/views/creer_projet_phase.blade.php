@include('admin_header')

	<div id="section">
	<section><br>
	
    @include('admin_navbar')

<div id="content"> 
    <form action="c_projet_phase" method="post">
    	<label>Intitulé de la phase de projet</label><br/>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    	<textarea name="phase" required="required" placeholder="Saisir l'intitulé de la phase du projet"></textarea><br/>
        @if($errors->has('phase'))
            {<span style="color:red">{!!$errors->first('phase')!!}</span>}
        @endif
    	<input type="submit" name="save" value="Enregistrer" />
    </form>
    <div id="contenu_table">

    <table id="table" border="0px">
    	<tr>
    		<td></td>
    		<td>Phase</td>
    	</tr>

        <?php
             $Phase=DB::table('phase')->orderBy('id', 'desc')->get();
            foreach($Phase as $row)
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