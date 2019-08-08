@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Component Management</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Case Assignment</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <form>
                                    <div class="form-group row">
                                        <label for="loan_type" class="col-sm-4 col-form-label">Loan Type</label>

                                        <div class="col-sm-8">
                                            <select id="loan_type" class="form-control">
                                                <option value="payday">PAYDAY</option>
                                                <option value="roll_over">ROLLOVER</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="product_name" class="col-sm-4 col-form-label">Product Name</label>

                                        <div class="col-sm-8">
                                            <select id="product_name" class="form-control">
                                                <option value="product_01">PRODUCT_01</option>
                                                <option value="product_02">PRODUCT_02</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="term" class="col-sm-4 col-form-label">Term</label>

                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="term">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="source_channel" class="col-sm-4 col-form-label">Source of Channel</label>

                                        <div class="col-sm-8">
                                            <select id="source_channel" class="form-control">
                                                <option value="google_play">GOOGLE PLAY</option>
                                                <option value="ads">ADS</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="package_name" class="col-sm-4 col-form-label">App Package Name</label>

                                        <div class="col-sm-8">
                                            <select id="package_name" class="form-control">
                                                <option value="google_play">mangocash.co</option>
                                                <option value="ads">mangocash.nw</option>
                                            </select>
                                        </div>
                                    </div>

                                </form>
                            </div>

                            <div class="col-sm-6">
                                <form>
                                    <div class="form-group row">
                                        <label for="loan_number" class="col-sm-4 col-form-label">Loan Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="loan_number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="denial_reason" class="col-sm-4 col-form-label">Denial Reason</label>

                                        <div class="col-sm-8">
                                            <select id="denial_reason" class="form-control">
                                                <option value="submitted">SUBMITTED</option>
                                                <option value="pre_review">PRE_REVIEW</option>
                                                <option value="first_review">FIRST_REVIEW</option>
                                                <option value="second_review">SECOND_REVIEW</option>
                                                <option value="final_review">FINAL_REVIEW</option>
                                                <option value="approved">APPROVED</option>
                                                <option value="rejected">REJECTED</option>
                                                <option value="ready_to_issue">READY_TO_ISSUE</option>
                                                <option value="issuing">ISSUING</option>
                                                <option value="current">CURRENT</option>
                                                <option value="issue_failed">ISSUE_FAILED</option>
                                                <option value="paid_off">PAID_OFF</option>
                                                <option value="grace_period">GRACE_PERIOD</option>
                                                <option value="overdue">OVERDUE</option>
                                                <option value="roll_over">ROLL_OVER</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="loan_amount" class="col-sm-4 col-form-label">Loan Amount</label>

                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="loan_amount">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="user_level" class="col-sm-4 col-form-label">User Level</label>

                                        <div class="col-sm-8">
                                            <select id="user_level" class="form-control">
                                                <option value="payday">LEVEL 01</option>
                                                <option value="roll_over">LEVEL 02</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="app_version_no" class="col-sm-4 col-form-label">App Version No.</label>

                                        <div class="col-sm-8">
                                            <select id="app_version_no" class="form-control">
                                                <option value="product_01">1</option>
                                                <option value="product_02">2</option>
                                            </select>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
