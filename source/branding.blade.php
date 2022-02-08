@extends('_layouts.main')

@section('body')
<h1>Branding Resources and Guidelines</h1>
<p>Here you will find various branding resources and assets for RiverStone Church along with guidelines on how to use
    them.</p>

<section>
    <h2>Colors</h2>
    <div class="my-5 mb-10 grid md:grid-cols-3 gap-5">
        <x-branding.color hex="#004FAD" code="blue" textColor="white" name="Primary" />
    </div>
</section>

<section>
    <h2>Logos</h2>
    <div class="my-5 mb-10 grid md:grid-cols-3 gap-5">
        <x-branding.asset src="/assets/images/riverstone-logo.png" name="Logo" />
        <x-branding.asset src="/assets/images/riverstone-logo-blue.png" name="Logo Blue" />
        <x-branding.asset src="/assets/images/riverstone-logo-black.png" name="Logo Black" />
        <x-branding.asset src="/assets/images/riverstone-logo-white.png" name="Logo White" background="bg-blue" />
    </div>
    <h3>Icons</h3>
    <div class="my-5 mb-10 grid md:grid-cols-3 gap-5">
        <x-branding.asset src="/assets/images/riverstone-icon.png" name="Icon" />
        <x-branding.asset src="/assets/images/riverstone-icon-blue.png" name="Icon Blue" />
        <x-branding.asset src="/assets/images/riverstone-icon-black.png" name="Icon Black" />
        <x-branding.asset src="/assets/images/riverstone-icon-blue-circle.png" name="Icon, Blue Circle" />
        <x-branding.asset src="/assets/images/riverstone-icon-black-circle.png" name="Icon, Black Circle" />
        <x-branding.asset src="/assets/images/riverstone-icon-white.png" name="Icon White" background="bg-blue" />
        <x-branding.asset src="/assets/images/riverstone-icon-white-circle.png" name="Icon, White Circle"
            background="bg-blue" />
        <x-branding.asset src="/assets/images/riverstone-icon-blue-white-circle.png" name="Icon Blue, White Circle"
            background="bg-blue" />
    </div>
</section>

@endsection