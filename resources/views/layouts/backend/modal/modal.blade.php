 
        <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Report info</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body  text-center justify-content-center">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav " style="">
                          <form action="" method="GET">
                              @csrf
                              <input  name="daily_report" class=" form-control" type="text" id="datepickers">

                              <input class=" btn btn-sm btn-primary" type="submit" value="Daily_report">
                          </form>
                         
                          {{-- <a class="nav-item nav-link" href="{{ route('app.report.report') }}">Daily report</a> --}}
  
                          <a class="nav-item nav-link" href="#">Monthly report</a>
  
                          <a class="nav-item nav-link" href="#">Yearly report</a>
                      
                        </div>
                      </div>
                    </nav>
                 
                </div>
                <div class="modal-footer">
               
                </div>
              </div>
            </div>
          </div>