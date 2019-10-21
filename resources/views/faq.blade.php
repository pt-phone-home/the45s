@extends('master')

@section('title')

@endsection

@section('pageDescription')

@endsection

@section('content')
<div class="h-30r flex items-center justify-start faq-hero">
    <h2 class="font-fancy text-gray-100 text-4xl z-10 mb-10 pl-8">
        Your Questions - Answered
    </h2>
</div>
<div class="bg-gray-100">
    <div class="container mx-auto flex pt-12">
        <div class="flex flex-col justify-center">
            <h1 class="font-fancy text-orange-400 bg-gray-900 w-3/4 px-4 py-4 text-2xl mb-6">FAQ's</h1>
            <p class="mb-6">You can always <a href="{{ route('contact') }}">contact us</a> about your event, however you may find some of the questions and answers below useful for general information. </p>
         </div>
    </div>
</div>
<div class="bg-gray-100 pb-8">
    <div class="container mx-auto border-2 border-gray-900">
        <div id="accordion">
            @component('components.faq', ['Qid' => 'faqBtn1', 'question' => 'Do you travel?', 'answer' => 'Of course! We love to travel! We do charge extra for the time depending on the location and you’ll need to cover transportation and accommodation for all band members. Ask us for a quote based on the specifics of your event. PS–if it’s within a couple hours, that’s included within our basic package at no added charge.', 'Aid' => 'faq1' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn2', 'question' => 'What does the band wear?', 'answer' => 'You can request different styles depending on the formality of your event', 'Aid' => 'faq2' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn3', 'question' => 'Do you play same-sex weddings?
            ', 'answer' => 'Absolutely! We play ALL weddings and happily celebrate love. Please don’t hesitate to reach out.', 'Aid' => 'faq3' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn4', 'question' => 'Do you play corporate events?', 'answer' => 'We do! See our songs & services page for more details.', 'Aid' => 'faq4' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn5', 'question' => 'Can the band play the ceremony and drinks on arrival?', 'answer' => 'Absolutely! We’re an all-inclusive band with a broad musical repertoire. Want classical music for your ceremony, a jazz set for your arrival drinks, and dance party reception? You’ve got it. Speak to us for more specific details, requests, and pricing.', 'Aid' => 'faq5' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn6', 'question' => 'What style of music do you play?', 'answer' => 'We play a wide variety of music. From Top 40, to classics, to classical and jazz. You can get an idea of the musical styles you can choose from on our songs & services page.', 'Aid' => 'faq6' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn7', 'question' => 'Can I choose the music?', 'answer' => 'We have a solid repertoire of songs that will please all of your guests from your 6-year old niece to your grandfather. It’s always important to have some freedom to read the room on the night; but our number one priority is pleasing YOU. Just let us know what you want to hear, and, if it’s not already in our repertoire, we’ll work with you to make your night perfect. You can also give us a list of songs that you love and songs that you dislike – we’ll base our choices on your music preferences.
            ', 'Aid' => 'faq7' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn8', 'question' => 'Will you learn a new song for us?', 'answer' => 'Of course! Just make sure you give us enough notice of your special request so the the band has time to learn your song.', 'Aid' => 'faq8' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn9', 'question' => 'How long does the band play for?
            ', 'answer' => 'Our typical quote, and the industry standard, is for a 5-hour event. This includes 4 x 45-minute sets, with intermittent breaks, to be spread throughout the night as you feel best. With speeches and other formalities, you’ll find this is usually the perfect amount of time to have the band playing. If you require a longer event and more sets, we are happy to discuss adding extra hours at little cost. Also, please know that we are always flexible to your needs. This 5-hour timeline breakdown is our standard recommendation, but anything can be customized to your plan. Talk to us about your ideas and dreams and we’ll do our best to accommodate!', 'Aid' => 'faq9' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn10', 'question' => 'Does the band play during dinner?', 'answer' => 'The band can absolutely play during dinner, but we’d recommend using your sets when your guests are ready to stand up and get dancing. Our typical event reception includes 4 x 45-minute sets with short DJ sets between the band sets. If you would like a dinner set, please let us know ahead of time as we defer to playing after-dinner sets unless otherwise instructed. You can always pay for extra time if you want a dinner set in addition to all four dance sets.', 'Aid' => 'faq10' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn11', 'question' => 'Can the band DJ during their breaks?', 'answer' => 'Absolutely! Send us a list of all the songs you want to hear. We’ll sort through the list and decide which will sound best live and which will be better to DJ during a break. DJ service is always free - we want to make sure the room is still buzzing when the band isn’t playing. If you like, you can bring your own Smart Phone for these breaks with a specific playlist, or, if you prefer, just leave it up to us! Either way, we’ll manage the playlist on the night so you don’t have to worry about the logistics. We always bring a Smart Phone with a selection of appropriate background music and, during dinner, the room is typically too noisy for the band to be playing, anyway – we want your guests to be able to enjoy their conversation and it’s much easier to control the noise level on a Smart Phone!', 'Aid' => 'faq11' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn12', 'question' => 'Can the band play continuous music?', 'answer' => 'Yes, but we do charge for the extra time. Speak to us for more details.', 'Aid' => 'faq12' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn13', 'question' => 'Can the band stay late on the night of?', 'answer' => 'Yes, we can! We want you to have the time of your life but we appreciate the heads up if you think you’re event will run long. Just like your other on-site vendors, we do charge for the extra time.', 'Aid' => 'faq13' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn14', 'question' => 'What do you recommend for instrumentation?', 'answer' => 'This depends on the type of music you want to hear. Our most common setup would include a guitar, bass, piano, drums, and lead singers. From there, you can add on horns or other instruments.', 'Aid' => 'faq14' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn15', 'question' => 'Does the band provide a sound system?', 'answer' => 'Yes! We look after everything music-related.', 'Aid' => 'faq15' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn16', 'question' => 'Can we use your sound equipment for speeches?', 'answer' => 'Yes! The mic and sound system is already hooked up, so we’re happy to provide a mic for your officiant, speeches, and any other announcements provided those are in the same spot as the reception band. Please, no “drop the mic” moments! This equipment is expensive and, contrary to popular belief, it does break when dropped–which you definitely don’t want to risk right before your reception. Speak to us regarding booking a secondary sound system in a separate area.', 'Aid' => 'faq16'])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn17', 'question' => 'Can you MC my event?', 'answer' => 'Of course! Talk to us at the planning stage. Two weeks before your wedding, we’ll go through all the details, including how to properly pronounce that one groomsman’s name with the silent “G”.', 'Aid' => 'faq17' ])
            @endcomponent

            @component('components.faq', ['Qid' => 'faqBtn18', 'question' => 'Can I see the band perform before I book them?', 'answer' => 'You sure can! Contact us for a list of upcoming shows', 'Aid' => 'faq18' ])
            @endcomponent
            @component('components.faq', ['Qid' => 'faqBtn19', 'question' => 'How far ahead of the wedding will you be in contact to go over the day-of details?', 'answer' => 'We’ll get in touch 2 weeks before your event to finalise the details. This gives you plenty of time to decide on your special dances and work out your event timeline. If you contact us before that and we don’t immediately get back to you, we’re likely handling details for a wedding that weekend. Don’t worry! We’ll give you the same dedicated attention when it comes to two weeks before your event.', 'Aid' => 'faq19' ])
            @endcomponent
            @component('components.faq', ['Qid' => 'faqBtn20', 'question' => 'How much do I pay and when?
            ', 'answer' => 'When you book the band, you’ll pay a 20% deposit to secure your date. The remaining amount is due two weeks before your event.', 'Aid' => 'faq20' ])
            @endcomponent
            @component('components.faq', ['Qid' => 'faqBtn21', 'question' => 'Who will be my contact on the day of?', 'answer' => 'You can always reach out to us with questions. The lead on your event will also be able to answer any questions your wedding planner or venue manager may have on the night.', 'Aid' => 'faq21' ])
            @endcomponent
            @component('components.faq', ['Qid' => 'faqBtn22', 'question' => 'What does the band require on the night?', 'answer' => 'A meal (to fuel ourselves!), electrical power (to fuel our instruments!), and a covered space on a flat, hard, dry surface to play. We do not require a stage!', 'Aid' => 'faq22' ])
            @endcomponent
            @component('components.faq', ['Qid' => 'faqBtn23', 'question' => 'Can the band play outside?', 'answer' => 'Yes, but we require cover (tent, awning, umbrella, etc.) and a flat, hard, dry surface to play on. Instruments don’t sound as nice when wet (trust us!) and electrical cords mixed with water can be a fire hazard. Also, heat can damage instruments, so please keep this in mind when placing your band and have a backup plan just in case!', 'Aid' => 'faq23' ])
            @endcomponent
            @component('components.faq', ['Qid' => 'faqBtn24', 'question' => 'We have a stage! What size stage do I need for the band to fit?', 'answer' => 'We certainly don’t require a stage to perform; but, if you choose to have one, it does make us feel like rockstars! The stage should be roughly 8x12 feet for a 3-4 piece band, 12x16 for a 5-8 piece, and 12x24 for a 9-14 piece. Ask your us if you still aren’t sure.', 'Aid' => 'faq24' ])
            @endcomponent
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$("#faqBtn1").click(function(){
$("#faq1").toggleClass("hide", 500);
});

$("#faqBtn2").click(function(){
$("#faq2").toggleClass("hide", 500);
});

$("#faqBtn3").click(function(){
$("#faq3").toggleClass("hide", 500);
});

$("#faqBtn4").click(function(){
$("#faq4").toggleClass("hide", 500);
});

$("#faqBtn5").click(function(){
$("#faq5").toggleClass("hide", 500);
});

$("#faqBtn6").click(function(){
$("#faq6").toggleClass("hide", 500);
});

$("#faqBtn7").click(function(){
$("#faq7").toggleClass("hide", 500);
});

$("#faqBtn8").click(function(){
$("#faq8").toggleClass("hide", 500);
});

$("#faqBtn9").click(function(){
$("#faq9").toggleClass("hide", 500);
});

$("#faqBtn10").click(function(){
$("#faq10").toggleClass("hide", 500);
});

$("#faqBtn11").click(function(){
$("#faq11").toggleClass("hide", 500);
});

$("#faqBtn12").click(function(){
$("#faq12").toggleClass("hide", 500);
});

$("#faqBtn13").click(function(){
$("#faq13").toggleClass("hide", 500);
});

$("#faqBtn14").click(function(){
$("#faq14").toggleClass("hide", 500);
});

$("#faqBtn15").click(function(){
$("#faq15").toggleClass("hide", 500);
});

$("#faqBtn16").click(function(){
$("#faq16").toggleClass("hide", 500);
});

$("#faqBtn17").click(function(){
$("#faq17").toggleClass("hide", 500);
});

$("#faqBtn18").click(function(){
$("#faq18").toggleClass("hide", 500);
});

$("#faqBtn19").click(function(){
$("#faq19").toggleClass("hide", 500);
});

$("#faqBtn20").click(function(){
$("#faq20").toggleClass("hide", 500);
});

$("#faqBtn21").click(function(){
$("#faq21").toggleClass("hide", 500);
});

$("#faqBtn22").click(function(){
$("#faq22").toggleClass("hide", 500);
});

$("#faqBtn23").click(function(){
$("#faq23").toggleClass("hide", 500);
});

$("#faqBtn24").click(function(){
$("#faq24").toggleClass("hide", 500);
});

$("#faqBtn25").click(function(){
$("#faq25").toggleClass("hide", 500);
});

$("#faqBtn26").click(function(){
$("#faq26").toggleClass("hide", 500);
});



</script>

<script>

</script>
@endsection
