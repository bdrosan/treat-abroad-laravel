@extends("layouts.client.layout")

@section("main")
    <div class="container-fluid mb-5" style="background: white ">
        <section style="background-color: transparent; padding: 3rem 0;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6" style="background: transparent;">
                        <div class="row card rounded border p-5 pb-0 text-center justify-content-between"
                             style="background: rgba(238,238,238,0.76);">
                            <h2>
                                <strong>Congratulations</strong>
                            </h2>
                            <h3 class="">
                                <span class="d-inline border rounded p-3 border-dark text-secondary">
                                    Your Appointment Is Booked
                                    <i class="fa-solid fa-check-double rounded-circle p-2 px-2 bg-success text-white"></i>
                                </span>
                            </h3>
                            <h4 class="text-danger">
                                You will receive a call soon
                                <i class="fa-solid fa-headset text-success"></i>
                            </h4>
                            <div class="text-right mt-3">
                                <a href="{{ route('appointments.download-receipt', ['id' => $appointment->id]) }}" class="btn shadow border border-danger bg-white rounded">
                                    Download Receipt
                                    <i class="fa-solid fa-receipt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection