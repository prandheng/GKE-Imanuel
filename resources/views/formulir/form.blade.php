@extends('layouts.main')
@section('container')
    <div class="formulir">
      <h1>Formulir</h1>
        <div class="formulir-content">
          <div class="tabs-container">
            <div class="tab" role="tab" tabindex="0" aria-controls="tab-panel-1" onclick="showTab('tab-panel-1')">Baptis</div>
            <div class="tab" role="tab" tabindex="0" aria-controls="tab-panel-2" onclick="showTab('tab-panel-2')">Nikah</div>
            <div class="tab" role="tab" tabindex="0" aria-controls="tab-panel-3" onclick="showTab('tab-panel-3')">Sidi</div>
          </div>
        
          <div class="tab-panel active" id="tab-panel-1">
            <h3 class="mt-0 mb-3">Baptis</h3>
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Usia</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        
          <div class="tab-panel" id="tab-panel-2">
            <h3 class="mt-0 mb-3">Nikah</h3>
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Usia</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        
          <div class="tab-panel" id="tab-panel-3">
            <h3 class="mt-0 mb-3"">Sidi</h3>
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Usia</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
    </div>
    <script>
      function showTab(tabId) {
        // Hide all tab panels
        var tabPanels = document.querySelectorAll('.tab-panel');
        tabPanels.forEach(function(panel) {
          panel.classList.remove('active');
        });
  
        // Show the selected tab panel
        var selectedTabPanel = document.getElementById(tabId);
        selectedTabPanel.classList.add('active');
      }
    </script>
@endsection
