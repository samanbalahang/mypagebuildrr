<?php
$allfonts=array();
$startfrom = 0;
$path = public_path("\/dashboard\/assets\/css\/chfont.css");
$handle = fopen($path , "r");
if ($handle) {
  while (($lines = fgets($handle)) !== false) {
    if(strpos($lines , ".") === 0){
        $allfonts[]= substr($lines,1 , (strpos($lines, "{")-1));
    }
  }
  fclose($handle);
}
$allfonts =(array_filter($allfonts, fn($value) => !is_null($value) && $value !== ''));
?>
<Select name="font" class="mb-3 form-control md-form w-100 font-selector">
     <option value="" selected disabled>یک فونت انتخاب کنید</option>
    @foreach ($allfonts as $fontName)
      <option value={{$fontName}}>{{$fontName}}</option>
    @endforeach
</Select>