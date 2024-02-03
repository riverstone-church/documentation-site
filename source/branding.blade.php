@extends('_layouts.main')

@section('body')
    <h1>Branding Resources and Guidelines</h1>
    <p>Here you will find various branding resources and assets for RiverStone Church along with guidelines on how to use
        them.</p>

    <section>
        <h2>Colors</h2>
        <div class="my-5 mb-10 grid md:grid-cols-3 gap-5">
            <x-branding.color hex="#033146" code="blue" textColor="white" name="Primary" />
        </div>
    </section>

    <section>
        <h2>Logos</h2>
        <div class="my-5 mb-10 grid md:grid-cols-3 gap-5">
            <x-branding.asset src="/assets/images/logos/rs-logo-primary.png" name="Primary" />
            <x-branding.asset src="/assets/images/logos/rs-logo-reversed.png" name="Reversed" background="bg-blue" />
        </div>
        <h3>Icons</h3>
        <div class="my-5 mb-10 grid md:grid-cols-3 gap-5">
            <x-branding.asset src="/assets/images/logos/rs-mark-primary.png" name="Icon" />
            <x-branding.asset src="/assets/images/logos/rs-mark-reversed.png" name="Reversed" background="bg-blue" />
        </div>
    </section>
@endsection
