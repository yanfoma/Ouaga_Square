
@include('admin_header')

	<div id="section">
	<section><br>
	
	@include('admin_navbar')

<div id="content"> 
	<form action="c_categorie_projet" method="post">
		<label>Résumé de la catégorie</label><br/>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="resume" required="required" placeholder="TIC" /><br/>
		@if($errors->has('resume'))
            {<span style="color:red">{!!$errors->first('resume')!!}</span>}
        @endif
		<label>Détail de la catégorie</label><br/>
		<input type="text" name="detail" required="required" placeholder="Technologie de l'Information et de la Communication" /><br/>
		@if($errors->has('detail'))
            {<span style="color:red">{!!$errors->first('detail')!!}</span>}
        @endif
		<input type="submit" name="save" value="Enregistrer" />
	</form>
	<div id="contenu_table">

	<table id="table" border="0px">
		<tr>
			<td></td>
			<td>Résumé</td>
			<td>Détail</td>
		</tr>

	    <?php
			 $Categorie=DB::table('categorie')->orderBy('id', 'desc')->get();
			foreach($Categorie as $row)
			{?>
				<tr>
					<td style="width:70px;background:rgb(255,218,218)"><strong>ID : <?php echo $row->id ?></strong></td>
					<td style="background:rgb(244,237,144)"><?php echo $row->resume_titre ?></td>
					<td style="background:rgb(244,237,144)"><?php echo $row->full_titre ?></td>
				</tr>
	    <?php } ?>
	</table>
	</div>
</div>
</section>
</div><br>

@include('admin_footer'); 
