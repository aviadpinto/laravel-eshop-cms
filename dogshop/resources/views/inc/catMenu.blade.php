
@if ( isset($cat_menu) && $cat_menu)
    
    
        <div class="col-md-3">
            <div class="sidey">
                <ul class="nav">
                   @foreach ( $cat_menu as $row )
                        <li><a href="{{url('shop/' . $row->url)}}"><i class="fa fa fa-paw"> </i> {{ $row->title }}</a></li>    
                  @endforeach  
                </ul>
            </div>
        </div>
    
@endif
