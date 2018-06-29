@extends ('main')

@section ('title', '| ContractUs')

@section ('content')
          <div class="row">
            <div class="col-md-12">
              <h1>Contract Me</h1>
              <hr>
              <form>
                <div class="form-group">
                  <label name="email">Email:</label>
                  <input id="email" name="email" class="form-control">
                </div> 

                <div class="form-group">
                  <label name="Subject">Subject:</label>
                  <input id="Subject" name="Subject" class="form-control">
                </div> 

                <div class="form-group">
                  <label name="Message">Message:</label>
                  <textarea id="Message" name="Message" class="form-control"> Type your message here...</textarea>
                </div> 
                <input type="submit" value="Send Message"  class="btn-btn-Success">

              </form>
            </div>
          </div>
@endsection  