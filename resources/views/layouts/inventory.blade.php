<form action="/admin\inventory" method="POST">
  @csrf
    <label class="checkbox-inline">
      <input type="checkbox" name="inventery[]" value="Genterator">&nbspGenterator
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"  name="inventery[]"value="Fan">&nbspFan
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="inventery[]"value="Sofa">&nbspSofa
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"name="inventery[]" value="Refrigerator">&nbsp Refrigerator
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"name="inventery[]" value="Bed">&nbspBed
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"name="inventery[]" value="Aircondictionor">&nbspAircondictionor
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"name="inventery[]" value="TV">&nbspTV
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"name="inventery[]" value="Laundry Machine">&nbspLaundry Machine
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"name="inventery[]" value="Microwave">&nbspMicrowave
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"name="inventery[]" value="CCTV">&nbspCCTV
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"name="inventery[]"" value="Hot and Cold water">&nbspHot and Cold water
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"name="inventery[]" value="Desk/Chair">&nbspDesk/Chair
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"name="inventery[]" value="Cabinet">&nbsp Cabinet
    </label>
     <br>
      <input type="submit"  valpue="ok"> 
     </form>

{{-- @foreach($t as $i)

{{ $i }}  
@endforeach  --}}