@include('admin_header')

	<div id="section">
	<section><br>
	
     @include('admin_navbar')

<div id="content"> 
    <form action="c_projet" method="post" style="width: 100%">
        <div id="cprojet">
    	<label>Intitulé en abrégé du projet</label><br/>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    	<input type="text" name="abrege" required="required" placeholder="" />
        @if($errors->has('abrege'))
            {<span style="color:red">{!!$errors->first('abrege')!!}</span>}
        @endif
        <label>Intitulé du projet</label><br/>
        <input type="text" name="intitule" required="required" placeholder="" /><br/>
        @if($errors->has('intitule'))
            {<span style="color:red">{!!$errors->first('intitule')!!}</span>}
        @endif
    	<label>Categorie du projet</label><br/>
    	<select name="categorie">
            @foreach($categorie as $item)
                <option value="{{$item->id}}">{{$item->full_titre}}</option>
            @endforeach
        </select>
        @if($errors->has('categorie'))
            {<span style="color:red">{!!$errors->first('categorie')!!}</span>}
        @endif
        <label>Cout du projet</label><br/>
        <input type="text" name="cout" required="required" placeholder="" /><br/>
        @if($errors->has('cout'))
            {<span style="color:red">{!!$errors->first('cout')!!}</span>}
        @endif
        <label>Identité du responsable</label><br/>
        <select name="responsable">
            @foreach($responsable as $item)
                <option value="{{$item->id}}">{{$item->libelle}}</option>
            @endforeach
        </select>
        @if($errors->has('responsable'))
            {<span style="color:red">{!!$errors->first('responsable')!!}</span>}
        @endif
        <label>Identité de l'exécuteur</label><br/>
        <select name="executeur">
            @foreach($executeur as $item)
                <option value="{{$item->id}}">{{$item->libelle}}</option>
            @endforeach
        </select>
        @if($errors->has('executeur'))
            {<span style="color:red">{!!$errors->first('executeur')!!}</span>}
        @endif
        <label>Délai du projet</label><br/>
        <input type="text" name="delai" required="required" placeholder="" /><br/>
        @if($errors->has('delai'))
            {<span style="color:red">{!!$errors->first('delai')!!}</span>}
        @endif
        </div>
        <div style="width: 55%;">
          <textarea name="contenu" required="required" class="ckeditor" placeholder="Saisir le contenu du projet"></textarea>  
        @if($errors->has('contenu'))
            {<span style="color:red">{!!$errors->first('contenu')!!}</span>}
        @endif 
        </div>
        <div style="margin-top: -1px">
            <span style="margin-left: 0%">Phase du projet</span>
        <select name="phase" style="width: 25%">
            @foreach($phase as $item)
                <option value="{{$item->id}}">{{$item->libelle}}</option>
            @endforeach
        </select>
        @if($errors->has('phase'))
            {<span style="color:red">{!!$errors->first('phase')!!}</span>}
        @endif
        </div>
        <input type="submit" name="save" value="Enregistrer" style="width: 93%" />
    </form>
</div>
</section>
</div><br>

@include('admin_footer');