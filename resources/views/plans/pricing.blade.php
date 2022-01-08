@extends('layouts.app')

@section('content')
<style>
    table, th, td {
        border: 1px solid #18333f;
        }
    .table-header{
        background-color: #18333f;
        color: white;
        font-size: 16px;
    }
    .table-header>.sorting{
        padding: 15px;
    }
    .td-content-wrapper>.td-content{
        padding-left: 10%;
        color: #0086c5;
        padding-top:10px;
        padding-bottom:10px;
    }
    .td-content-wrapper>.td-content-icon{
        text-align: center;
        
    }
    .td-content-wrapper>.td-content-icon>.fa-check{
        color:green;
    }
    .td-content-wrapper>.td-content-icon>.fa-times{
        color:red;
    }
</style>
<section class="page-title">
    <div class="grid-row clearfix">
        <h1>Plans & Pricing</h1>
        
        <nav class="bread-crumbs">
            <a href="{{url('/')}}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
            <a href="#">Pricing</a>
        </nav>
    </div>
</section>
<main class="page-content">
    <div class="grid-row">
        <section class="widget photo-tour photo-tour-1">	
            <div class="widget-title">Pricing Packages for Medical Billing Services.</div>
            <table class="tablesorter eael-data-table center" bordered id="eael-data-table-2d34881">
                <thead>
                    <tr class="table-header">
                        <th class=" sorting" id="" colspan=""> <span class="data-table-header-text">List of services</span></th>
                        <th class=" sorting" id="" colspan=""> <span class="data-table-header-text">Basic Plan <br> <span>2.5%</span></span>
                        </th>
                        <th class=" sorting" id="" colspan=""> <span class="data-table-header-text">All Essentials<br> <span>4.0%</span></span>
                        </th>
                        <th class=" sorting" id="" colspan=""> <span class="data-table-header-text">Premium Services <br><span>5.5%</span></span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Accounts Receivable</div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Basic Reporting</div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Charge/Claim Entry</div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Claims Appeals Management</div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Codes Review - LCD and NCCI Edits</div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Credentialing Assistance</div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Customer Support- Email</div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Customer Support- Phone </div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Dedicated Account Manager </div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Denial Management </div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">EDI Rejection Management </div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Electronic Claim Submission </div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Full Scale Coding Service</div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Insurance Verification </div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Patient Billing &amp; Statements</div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Monthly Analytical Report </div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Paper Claim Submission </div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Patient Billing &amp; Statements </div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Patient Registration </div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Payment Posting </div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Transcription/Charts in EHR </div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Value-based Care (MIPS) Assistance </div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="widget photo-tour photo-tour-1">	
            <div class="widget-title">Our Standard Transcription Charges</div>
            <table class="tablesorter eael-data-table center" id="eael-data-table-5a22686">
                <thead>
                    <tr class="table-header">
                        <th class=" sorting" id="" colspan=""> <span class="data-table-header-text">Service</span></th>
                        <th class=" sorting" id="" colspan=""> <span class="data-table-header-text">Charges</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Line Based</div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Starting from 3.5 Cents Per Line</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Minutes Based</div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Starting from $0.45 Per Minute</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Report Based</div>
                            </div>
                        </td>
                        <td colspan="" rowspan="" class="" id="">
                            <div class="td-content-wrapper">
                                <div class="td-content">Starting from $0.75 Per Report</div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</main>

@endsection