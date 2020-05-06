<!DOCTYPE html>
<html>

<head>
    <title>Estimate</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style type="text/css">
        body {
            font-family: "DejaVu Sans";
        }

        html {
            margin: 0px;
            padding: 0px;
            margin-top: 50px;
        }

        table {
            border-collapse: collapse;
        }

        hr {
            margin: 0 30px 0 30px;
            color: rgba(0, 0, 0, 0.2);
            border: 0.5px solid #EAF1FB;
        }

        /* -------------------------- */
        /* header style */

        .header-bottom-divider {
            color: rgba(0, 0, 0, 0.2);
            position: absolute;
            top: 90px;
            left: 0px;
            width: 100%;
        }

        .header-container {
            position: absolute;
            width: 100%;
            height: 90px;
            left: 0px;
            top: -50px;
        }

        .header-logo {
            height: 50px;
            margin-top: 20px;
            text-transform: capitalize;
            color: #817AE3;
        }

        .header {
            font-size: 20px;
            color: rgba(0, 0, 0, 0.7);
        }

        .wrapper {
            display: block;
            margin-top: 0px;
            padding-top: 16px;
            padding-bottom: 20px;
        }

        /* -------------------------- */
        /* company details style */

        .company-details-container {
            padding-top: 30px;
        }

        .company-address-container {
            float: left;
            padding-left: 30px;
            width: 30%;
            text-transform: capitalize;
            margin-bottom: 2px;
        }

        .company-address-heading {
            font-size: 15px;
            line-height: 22px;
            letter-spacing: 0.05em;
            margin-bottom: 0px;
            margin-top: 10px;
        }

        .company-address-text {
            margin-top: 2px;
            text-align: left;
            font-size: 12px;
            line-height: 15px;
            color: #595959;
        }

        .estimate-details-container {
            float: right;
            padding: 10px 30px 0 0;
        }

        .attribute-label {
            font-size: 12px;
            line-height: 18px;
            padding-right: 40px;
            text-align: left;
            color: #55547A
        }

        .attribute-value {
            font-size: 12px;
            line-height: 18px;
            text-align: right;
        }

        /* -------------------------- */
        /* customer address style */

        .customer-address-container {
            width: 45%;
            padding: 0px 0 0 0px;
        }

        /* -------------------------- */
        /* shipping style */

        .shipping-address-container {
            float: right;
            padding-left: 30px;
        }

        .shipping-address-container--left {
            float: left;
            padding-left: 30px;
        }

        .shipping-address-label {
            font-size: 12px;
            line-height: 18px;
            padding: 0px;
            margin-top: 27px;
            margin-bottom: 0px;
        }

        .shipping-address-name {
            max-width: 250px;
            font-size: 15px;
            line-height: 22px;
            padding: 0px;
            margin: 0px;
        }

        .shipping-address-text {
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            padding: 0px;
            margin: 0px;
            width: 160px;
        }

        /* -------------------------- */
        /* billing style */

        .billing-address-container {
            float: left;
            padding-left: 30px;
        }

        .billing-address-label {
            font-size: 12px;
            line-height: 18px;
            padding: 0px;
            margin-top: 27px;
            margin-bottom: 0px;
        }

        .billing-address-name {
            max-width: 250px;
            font-size: 15px;
            line-height: 22px;
            padding: 0px;
            margin: 0px;
        }

        .billing-address-text {
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            padding: 0px;
            margin: 0px;
            width: 160px;
        }

        /* -------------------------- */
        /* items style */

        .items-table {
            margin-top: 35px;
            padding: 0px 30px 10px 30px;
            page-break-before: avoid;
            page-break-after: auto;
        }

        .items-table hr {
            height: 0.1px;
        }

        .item-table-heading {
            font-size: 13.5;
            text-align: center;
            color: rgba(0, 0, 0, 0.85);
            padding: 5px;
            padding-bottom: 10px;
        }

        tr.item-table-heading-row th {
            border-bottom: 0.620315px solid #E8E8E8;
            font-size: 12px;
            line-height: 18px;
        }

        .item-table-heading-row {
            margin-bottom: 10px;
        }

        tr.item-row td {
            font-size: 12px;
            line-height: 18px;
        }

        .item-cell {
            font-size: 13;
            color: #040405;
            text-align: center;
            padding: 5px;
            padding-top: 10px;
            border-color: #d9d9d9;
        }

        .item-description {
            color: #595959;
            font-size: 9px;
            font-weight:300;
            line-height: 12px;
        }

        /* -------------------------- */
        /* total display table style */

        .total-display-table {
            border-top: none;
            box-sizing: border-box;
            width: 630px;
            page-break-inside: avoid;
            page-break-before: auto;
            page-break-after: auto;
            margin-left:420px;
            margin-top: 10px
        }

        .total-table-attribute-label {
            font-size: 12px;
            color: #55547A;
            text-align: left;
            padding-left: 10px;
        }

        .total-table-attribute-value {
            font-weight: 500;
            text-align: right;
            font-size: 12px;
            color: #040405;
            padding-right: 10px;
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .total-border-left {
            border: 1px solid #E8E8E8 !important;
            border-right: 0px !important;
            padding-top: 0px;
            padding: 8px !important;
        }

        .total-border-right {
            border: 1px solid #E8E8E8 !important;
            border-left: 0px !important;
            padding-top: 0px;
            padding: 8px !important;
        }

        /* -------------------------- */
        /* notes style */

        .notes {
            font-size: 12px;
            color: #595959;
            margin-top: 15px;
            margin-left: 30px;
            width: 442px;
            text-align: left;
            page-break-inside: avoid;
        }

        .notes-label {
            font-size: 15px;
            line-height: 22px;
            letter-spacing: 0.05em;
            color: #040405;
            width: 108px;
            height: 19.87px;
            padding-bottom: 10px;
        }

        /* -------------------------- */
        /* helpers style */

        .text-primary {
            color: #5851DB;
        }

        .text-center {
            text-align: center
        }

        table .text-left {
            text-align: left;
        }

        table .text-right {
            text-align: right;
        }

        .border-0 {
            border: none;
        }

        .py-2 {
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .py-8 {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .py-3 {
            padding: 3px 0;
        }

        .pr-20 {
            padding-right: 20px;
        }

        .pr-10 {
            padding-right: 10px;
        }

        .pl-20 {
            padding-left: 20px;
        }

        .pl-10 {
            padding-left: 10px;
        }

        .pl-0 {
            padding-left: 0;
        }
    </style>
</head>

<body>
    <div class="header-container">
        <table width="100%">
            <tr>
                <td class="text-center">
                    @if($logo)
                    <img class="header-logo" src="{{ $logo }}" alt="Company Logo">
                    @else
                    @if($estimate->user->company)
                    <h2 class="header-logo"> {{$estimate->user->company->name}} </h2>
                    @endif
                    @endif
                </td>
            </tr>
        </table>
        <hr class="header-bottom-divider" />
    </div>
    <div class="wrapper">
        <div class="company-details-container">
            <div class="company-address-container">
                @include('app.pdf.estimate.partials.company-address')
            </div>
            <div class="estimate-details-container">
                <table class="estimate-details-table">
                    <tr>
                        <td class="attribute-label">Estimate Number</td>
                        <td class="attribute-value"> &nbsp;{{$estimate->estimate_number}}</td>
                    </tr>
                    <tr>
                        <td class="attribute-label">Estimate Date </td>
                        <td class="attribute-value"> &nbsp;{{$estimate->formattedEstimateDate}}</td>
                    </tr>
                    <tr>
                        <td class="attribute-label">Expiry Date</td>
                        <td class="attribute-value"> &nbsp;{{$estimate->formattedExpiryDate}}</td>
                    </tr>
                </table>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="customer-address-container">
            <div class="billing-address-container">
                @include('app.pdf.estimate.partials.billing-address')
            </div>
            @if($estimate->user->billingaddress)
            <div class="shipping-address-container">
            @else
            <div class="shipping-address-container--left">
            @endif
            @include('app.pdf.estimate.partials.shipping-address')
            </div>
            <div style="clear: both;"></div>
            </div>
            <div style="position:relative">
                @include('app.pdf.estimate.partials.table')
            </div>
            @include('app.pdf.estimate.partials.notes')
        </div>
</body>

</html>
