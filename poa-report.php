<?php
/*
Plugin Name: iVET360 Plan of Action Report
Description: The iVET360 Plan of Action report.
Author: Brendan Shea
Version: 0.1
*/

function poa_results() {
  ob_start();
  $entry_id = $_GET['entry_id'];
  esc_html($entry_id);
  $entry = GFAPI::get_entry( $entry_id );
  esc_html($entry);
  ?>
  <div id="poa-page">
    <!-- HERO START -->
    <div id="hero-outer">
      <div id="hero-inner">
        <div id="hero-text">
          <h1>Plan of Action</h1>
          <?php
          $source = $entry['256'];
          $date = new DateTime($source);
          ?>
          <h2><?php echo $entry['40']; ?></h2>
          <p><?php echo $date->format('F d, Y'); ?></p>
        </div>
      </div>
      <svg id="hero-wave" width="1600" height="120" viewBox="0 0 1600 120" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M-3 3.62242e-05C791 -0.000102603 786.5 96.4999 1600.5 121.5L1600.5 -0.000244141L-3 3.62242e-05Z" fill="#152C5D"/>
      </svg>
    </div>
    <!-- HERO END -->
    <!-- RESULTS START -->
    <div id="results-outer">
      <div id="results-inner">
        <!-- TOGGLE START -->
        <div id="poa-toggle">
          <div class="toggle active-toggle" id="scorecards-toggle">
            <p>Scorecards</p>
          </div>
          <div class="toggle" id="plan-toggle">
            <p>Your Plan</p>
          </div>
        </div>
        <!-- TOGGLE END -->
        <!-- SCOREDCARD START -->
        <div id="scorecard-results" class="results">
          <?php if ($entry['1'] != null) { ?>
          <div class="scorecard-section" id="marketing-section">
            <div class="top-bar">
              <div class="orange-title">
                <p>Marketing Scorecards</p>
              </div>
              <div class="report-btns">
                <div class="toggle-btns">
                  <div class="toggle-cover"></div>
                  <i class="fas fa-arrow-left left-report-btn" id="marketing-left"></i>
                  <p>Report <span class="report-number" id="marketing-numbers">1</span> of 5</p>
                  <i class="fas fa-arrow-right right-report-btn" id="marketing-right"></i>
                </div>
                <p class="view-all-btn" id="marketing-all">View All</p>
              </div>
            </div>
            <div class="report marketing-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Website Characteristics</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Category</p>
                  </div>
                  <div class="col-two">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-three">
                    <p>Your Score</p>
                  </div>
                  <div class="col-four">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Domain Name Set Up</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>86.9% of hospitals have their domain name set up correctly</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['1'] == 'Yes' || $entry['1'] == 'Pass') { ?>
                    <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                    <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['119'] == null) { ?>
                    <p class="no-notes">N/A</p>
                    <?php } else { ?>
                    <p><?php echo $entry['119'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Mobile Responsive Website</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>94.1% of hospitals have a mobile responsive website</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['2'] == 'Yes' || $entry['2'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['120'] == null) { ?>
                    <p class="no-notes">N/A</p>
                    <?php } else { ?>
                    <p><?php echo $entry['120'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>SSL Certificates</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>83.2% of hospitals have a secure website</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['4'] == 'Yes' || $entry['4'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['121'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['121'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Search Engine Optimization (SEO)</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>18.2% of hospitals have an SEO optimized website</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['5'] == 'Yes' || $entry['5'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['122'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['122'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Google Analytics</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>83.4% of hospitals have Google Analytics installed</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['6'] == 'Yes' || $entry['6'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['123'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['123'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>ADA Accessibility</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>52.2% of hospitals have an ADA compliant website</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['9'] == 'Yes' || $entry['9'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['124'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['124'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Website Page Speed</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>4.2s average website load time</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['257'] == 'Yes' || $entry['257'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['125'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['125'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Website Experience - Performance</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Average performance score of 37</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['258'] == 'Yes' || $entry['258'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['126'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['126'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Website Experience - Accessibility</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Average accessibility score of 83</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['259'] == 'Yes' || $entry['259'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['127'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['127'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Website Experience - Best Practices</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Average best practices score of 73</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['260'] == 'Yes' || $entry['260'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['128'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['128'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Website Experience - SEO</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Average SEO score of 86</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['261'] == 'Yes' || $entry['261'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['129'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['129'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="report marketing-report hidden-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Google Characteristics</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Category</p>
                  </div>
                  <div class="col-two">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-three">
                    <p>Your Score</p>
                  </div>
                  <div class="col-four">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Google Reviews</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Hospitals have an average of 165 Google Reviews</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['262'] == 'Yes' || $entry['262'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['130'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['130'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Google Star Rating (Out of 5)</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Hospitals have an average star rating of 4.6</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['263'] == 'Yes' || $entry['263'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['131'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['131'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>GMB Claimed</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>89% of hospitals have claimed their GMB Listing</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['12'] == 'Yes' || $entry['12'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['132'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['132'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>GMB Appointment Link</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>28.8% of hospitals have a GMB Appointment Link</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['13'] == 'Yes' || $entry['13'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['133'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['133'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>GMB Questions & Answers</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>23.9% of hospitals are using GMB Questions & Answers</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['39'] == 'Yes' || $entry['39'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['134'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['134'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Number of GMB Questions</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Hospitals have an average of 4 GMB Questions</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['264'] == 'Yes' || $entry['264'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['135'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['135'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>GMB Posts</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>32.9% of hospitals are utilizing GMB Posts</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['16'] == 'Yes' || $entry['16'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['136'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['136'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>GMB Offers</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>5.3% of hospitals are utilizing GMB Offers</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['17'] == 'Yes' || $entry['17'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['137'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['137'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>GMB Description</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>44.5% of hospitals have a GMB Description</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['18'] == 'Yes' || $entry['18'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['138'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['138'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Google Short Name</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>23% of hospitals have a Google Short Name</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['19'] == 'Yes' || $entry['19'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['139'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['139'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Google Ads</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>10.5% of hospitals are utilizing GMB Offers</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['11'] == 'Yes' || $entry['11'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['140'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['140'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="report marketing-report hidden-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Facebook Characteristics</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Category</p>
                  </div>
                  <div class="col-two">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-three">
                    <p>Your Score</p>
                  </div>
                  <div class="col-four">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Facebook Recommendations</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>40 Facebook Recommendations for the average hospital</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['265'] == 'Yes' || $entry['265'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['141'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['141'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Facebook Star Rating (Out of 5)</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Hospitals have an average star rating of 4.7</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['266'] == 'Yes' || $entry['266'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['142'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['142'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Facebook Likes</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Hospitals average 1,403 Facebook Likes</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['267'] == 'Yes' || $entry['267'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['143'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['143'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Facebook Followers</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Hospitals average 1,493 Facebook Followers</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['268'] == 'Yes' || $entry['268'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['144'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['144'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Facebook Check-Ins</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Hospitals average 733 Facebook Check-Ins</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['269'] == 'Yes' || $entry['269'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['145'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['145'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Facebook Username</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>81.6% of hospitals have a Facebook Username</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['21'] == 'Yes' || $entry['21'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['146'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['146'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Facebook Branding</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>63.9% of hospitals have a Facebook Branded page</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['20'] == 'Yes' || $entry['20'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['147'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['147'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Facebook Messenger</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>83.3% of hospitals are using Facebook Messenger</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['23'] == 'Yes' || $entry['23'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['148'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['148'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Facebook Offers</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>7.4% of hospitals are using Facebook Offers</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['24'] == 'Yes' || $entry['24'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['149'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['149'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Facebook Ads</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>8% of hospitals are using Facebook Ads</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['56'] == 'Yes' || $entry['56'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['150'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['150'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="report marketing-report hidden-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Yelp Characteristics</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Category</p>
                  </div>
                  <div class="col-two">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-three">
                    <p>Your Score</p>
                  </div>
                  <div class="col-four">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Yelp Reviews</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Hospitals average 34 Yelp Reviews</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['270'] == 'Yes' || $entry['270'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['151'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['151'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Yelp Star Rating (Out of 5)</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Hospitals have an average star rating of 4</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['271'] == 'Yes' || $entry['271'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['152'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['152'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Yelp Not Recommended</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Hospitals average 18 Yelp Not Recommended Reviews</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['272'] == 'Yes' || $entry['272'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['153'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['153'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Yelp Claimed</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>45% of hospitals have claimed their Yelp Business Listing</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['28'] == 'Yes' || $entry['28'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['154'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['154'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Yelp Check-In Offers</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>8.9% of hospitals haver a Yelp Check-In Offer</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['30'] == 'Yes' || $entry['30'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['155'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['155'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Yelp Ask the Community</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>3.5% of hospitals are using Yelp Ask the Community</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['32'] == 'Yes' || $entry['32'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['156'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['156'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Number of Yelp Questions</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Hospitals average .3 Yelp Questions</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['273'] == 'Yes' || $entry['273'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['157'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['157'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Yelp Ads</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>17.5% of hospitals are utilizing Yelp Ads</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['29'] == 'Yes' || $entry['29'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['158'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['158'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Yelp Deals</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>0.7% of hospitals are offering a Yelp Deal</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['31'] == 'Yes' || $entry['31'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['159'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['159'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Yelp Connect (Posts)</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>0.2% of hospitals are using Yelp Posts</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['59'] == 'Yes' || $entry['59'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['160'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['160'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="report marketing-report hidden-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Nextdoor Characteristics</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Category</p>
                  </div>
                  <div class="col-two">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-three">
                    <p>Your Score</p>
                  </div>
                  <div class="col-four">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Nextdoor Claimed</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>33% of hospitals have claimed their Nextdoor Listing</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['35'] == 'Yes' || $entry['35'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['161'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['161'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Nextdoor Recommendations</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Hospitals have an average of 92 Nextdoor Recommendations</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['274'] == 'Yes' || $entry['274'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['162'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['162'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Nextdoor Favorites</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Hospitals have an average of 5 Neighborhood Favorites</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['275'] == 'Yes' || $entry['275'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['163'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['163'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Nextdoor Local Deals</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>0.6% are utilizing Nextdoor Local Deals</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['38'] == 'Yes' || $entry['38'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['164'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['164'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <?php if ($entry['63'] != null) { ?>
          <div class="scorecard-section" id="analytics-section">
            <div class="top-bar">
              <div class="orange-title">
                <p>Analytics Scorecards</p>
              </div>
              <div class="report-btns">
                <div class="toggle-btns">
                  <div class="toggle-cover"></div>
                  <i class="fas fa-arrow-left left-report-btn" id="analytics-left"></i>
                  <p>Report <span class="report-number" id="analytics-numbers">1</span> of 2</p>
                  <i class="fas fa-arrow-right right-report-btn" id="analytics-right"></i>
                </div>
                <p class="view-all-btn" id="analytics-all">View All</p>
              </div>
            </div>
            <div class="report analytics-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Finanical</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Category</p>
                  </div>
                  <div class="col-two">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-three">
                    <p>Your Score</p>
                  </div>
                  <div class="col-four">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Practice Revenue Growth</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p><$2.5M: 10%+ Growth over prior year<br>
                    >$2.5M: 8%+ Growth over prior year</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['63'] == 'Yes' || $entry['63'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['165'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['165'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Discounting</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Less than 5% of net revenue</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['65'] == 'Yes' || $entry['65'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['166'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['166'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Gross Margin (Revenue less COGS)</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Above 75%</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['66'] == 'Yes' || $entry['66'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['167'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['167'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>OPEX Margin (Operational expenses as % of revenue)</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Less than 65%</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['67'] == 'Yes' || $entry['67'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['168'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['168'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>EBITDA Margin (Includes owners salary)</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Minimum 15%</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['68'] == 'Yes' || $entry['68'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['169'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['169'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Financial Statement timeliness</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Books should be closed out by the 20th of the following month, not counting year-end close out.</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['69'] == 'Yes' || $entry['69'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['170'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['170'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Chart of Accounts</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Sufficient detail in variable expense, and other operating expenses and proper coding of accounts.</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['70'] == 'Yes' || $entry['70'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['171'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['171'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="report analytics-report hidden-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Operational</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Category</p>
                  </div>
                  <div class="col-two">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-three">
                    <p>Your Score</p>
                  </div>
                  <div class="col-four">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Practice Average Transaction Charge</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>$140 dollars per transaction. Total revenue divided by total transactions for the same period of time.</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['73'] == 'Yes' || $entry['73'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['172'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['172'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Revenue per FTE</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>$120k (Includes DVMs and all support staff)</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['74'] == 'Yes' || $entry['74'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['173'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['173'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>FTE per DVM</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Under 4.5 FTE per DVM FTE</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['75'] == 'Yes' || $entry['75'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['174'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['174'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Revenue Per DVM</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>$660K per DVM. Total revenue for the year divided by the FTE DVM count for same period of time.</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['76'] == 'Yes' || $entry['76'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['175'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['175'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Revenue Per Square Foot (SqFt)</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>$500 per square foot</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['77'] == 'Yes' || $entry['77'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['176'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['176'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Revenue Per Exam Room</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>$520k per exam room</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['78'] == 'Yes' || $entry['78'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['177'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['177'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Number of Transactions Per DVM</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>4500 transactions per DVM. Total transactions for the year divided by FTE DVM count.</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['79'] == 'Yes' || $entry['79'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['178'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['178'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Revenue Category Detail</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Sufficient detail in Revenue categories for benchmarking and easy identification of revenue centers.</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['80'] == 'Yes' || $entry['80'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['179'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['179'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <!-- <div class="row">
                <div class="row-inner">
                  <div class="col-one">
                    <p>Front Office Staff Call Conversion Rate</p>
                  </div>
                  <div class="col-two">
                    <p>Total Conversion should be at least 80% from website traffic.</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['conversion_rate'] == 'Yes' || $entry['conversion_rate'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['notes_62'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['notes_62'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="col-one">
                    <p>Front Office Live Answer Rate</p>
                  </div>
                  <div class="col-two">
                    <p>Live answer rates should be at least 95%.</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['live_answer'] == 'Yes' || $entry['live_answer'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['notes_63'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['notes_63'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div> -->
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>New Client Growth</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>20 per FTE DVM/Mo</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['83'] == 'Yes' || $entry['83'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['182'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['182'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>New Client Average Annual Spend</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Above $350 per new client</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['84'] == 'Yes' || $entry['84'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['183'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['183'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Category</p>
                  </div>
                  <div class="col-one">
                    <p>Percentage of Revenue from New Clients</p>
                  </div>
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Between 10% to 20%</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['85'] == 'Yes' || $entry['85'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['184'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['184'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <!-- <div class="row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Client Retention</p>
                  </div>
                  <div class="col-two">
                    <p>Above 85%</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['client_retention'] == 'Yes' || $entry['client_retention'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="col-four">
                    <?php if ($entry['notes_67'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['notes_67'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div> -->
            </div>

          </div>
          <?php } ?>
          <?php if ($entry['88'] != null) { ?>
          <div class="scorecard-section" id="hr-section">
            <div class="top-bar">
              <div class="orange-title">
                <p>HR & Training Scorecards</p>
              </div>
              <div class="report-btns">
                <div class="toggle-btns">
                  <div class="toggle-cover"></div>
                  <i class="fas fa-arrow-left left-report-btn" id="hr-left"></i>
                  <p>Report <span class="report-number" id="hr-numbers">1</span> of 8</p>
                  <i class="fas fa-arrow-right right-report-btn" id="hr-right"></i>
                </div>
                <p class="view-all-btn" id="hr-all">View All</p>
              </div>
            </div>
            <div class="report hr-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Performance Management</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>One evaluation structure performed annually with a focus on development</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['88'] == 'Yes' || $entry['88'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['186'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['186'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Job Descriptions have responsibilities, requirements, culture, and signature</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['89'] == 'Yes' || $entry['89'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['187'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['187'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Monthly one on one are conducted and documented with each employee</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['90'] == 'Yes' || $entry['90'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['188'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['188'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Disciplinary structure is outlined in handbook and is enforced consistently</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['91'] == 'Yes' || $entry['91'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['189'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['189'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="report hr-report hidden-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Supervisor Skills</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Supervisors possess the appropriate leadership skill level for their position</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['93'] == 'Yes' || $entry['93'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['190'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['190'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Hospital provides annual or quarterly supervisor specific training</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['94'] == 'Yes' || $entry['94'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['191'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['191'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Supervisors receive quarterly or semi-annual 360 evals</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['95'] == 'Yes' || $entry['95'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['192'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['192'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="report hr-report hidden-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Client Experience</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Client complaints do not reflect internal hospital issues</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['97'] == 'Yes' || $entry['97'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['193'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['193'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Hospital provides routine client experience training (at least EOM)</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['98'] == 'Yes' || $entry['98'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['194'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['194'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="report hr-report hidden-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Employee Engagement</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Employee happiness score over 8</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['100'] == 'Yes' || $entry['100'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['195'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['195'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Hospital engages in routine team building activities (at least monthly)</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['101'] == 'Yes' || $entry['101'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['196'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['196'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="report hr-report hidden-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Culture</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Has mission, vision, and/or core behaviors, known by PO/ PM</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['103'] == 'Yes' || $entry['103'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['197'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['197'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Culture is discussed on a daily basis in the hospital</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['104'] == 'Yes' || $entry['104'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['198'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['198'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>All employee documentation is tied to practice culture</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['105'] == 'Yes' || $entry['105'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['199'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['199'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="report hr-report hidden-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Recruiting</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Background checks are performed on all candidates prior to hire</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['109'] == 'Yes' || $entry['109'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['200'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['200'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Interview questions are legal and job-specific</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['107'] == 'Yes' || $entry['107'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['201'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['201'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>References are checked for all final candidates prior to hire</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['108'] == 'Yes' || $entry['108'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['202'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['202'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="report hr-report hidden-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Legal Compliance</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Hospital has employee handbook, is up to date on current laws</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['111'] == 'Yes' || $entry['111'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['203'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['203'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Employees are classified properly</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['112'] == 'Yes' || $entry['112'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['204'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['204'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Hospital follows FLSA and equal pay laws</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['113'] == 'Yes' || $entry['113'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['205'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['205'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Appropriate legal posters are visible to employees</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['114'] == 'Yes' || $entry['114'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['206'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['206'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="report hr-report hidden-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title">Training</h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-two">
                    <p>Your Score</p>
                  </div>
                  <div class="col-three">
                    <p>Notes</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>New hire training program is effective and completed by all new hires</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['116'] == 'Yes' || $entry['116'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['207'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['207'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Ongoing training is provided to all employees at least monthly</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['117'] == 'Yes' || $entry['117'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['208'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['208'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Benchmark</p>
                  </div>
                  <div class="col-one">
                    <p>Routine CE provided for all employees</p>
                  </div>
                  <div class="mobile-col">
                    <p>Your Score</p>
                  </div>
                  <div class="col-two">
                    <?php if ($entry['118'] == 'Yes' || $entry['118'] == 'Pass') { ?>
                      <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" />
                    <?php } else { ?>
                      <img class="times" src="/wp-content/uploads/2021/01/scorecard-x.svg" alt="Minus mark" />
                    <?php } ?>
                  </div>
                  <div class="mobile-col">
                    <p>Notes</p>
                  </div>
                  <div class="col-three">
                    <?php if ($entry['209'] == null) { ?>
                      <p class="no-notes">N/A</p>
                    <?php } else { ?>
                      <p><?php echo $entry['209'] ?></p>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <?php } ?>
          <div id="btp">
            <a href="#poa-page" class="teal-btn" id="btp-btn">
              <p>Back to top</p>
              <i class="fas fa-caret-up"></i>
            </a>
          </div>
        </div>
        <!-- SCOREDCARD END -->
        <!-- PLAN START -->
        <div id="plan-results" class="results hidden" style="display: none;">
          <div class="plan-section" id="practice-goals">
            <div class="top-bar">
              <div class="orange-title">
                <p>Practice Goals</p>
              </div>
            </div>
            <div class="report priority-report">
              <div class="row" id="priority-row-one">
                <div class="row-inner no-border">
                  <div class="goal-row">
                    <div class="goal-number">1</div>
                    <h2 class="report-title"><?php echo $entry['216'] ?></h2>
                  </div>
                </div>
                <div class="row-inner no-border">
                  <div class="goal-row">
                    <div class="goal-number">2</div>
                    <h2 class="report-title"><?php echo $entry['217'] ?></h2>
                  </div>
                </div>
                <div class="row-inner no-border">
                  <div class="goal-row">
                    <div class="goal-number">3</div>
                    <h2 class="report-title"><?php echo $entry['218'] ?></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="plan-section plan-hover">
            <div class="top-bar">
              <div class="orange-title">
                <p>Priority/Objective</p>
              </div>
            </div>
            <div class="report priority-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title"><?php echo $entry['212'] ?></h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Metric</p>
                  </div>
                  <div class="col-two">
                    <p>Tools used</p>
                  </div>
                  <div class="col-three">
                    <p>Accountability</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Metric</p>
                  </div>
                  <div class="col-one">
                    <p><?php echo $entry['213'] ?></p>
                  </div>
                  <div class="mobile-col">
                    <p>Tools Used</p>
                  </div>
                  <div class="col-two tools-used">
                    <?php if ($entry['211.1'] == '1'): ?>
                      <div class="tool-used"><?php echo $entry['211.1'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.2'] == '2'): ?>
                      <div class="tool-used"><?php echo $entry['211.2'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.3'] == '3'): ?>
                      <div class="tool-used"><?php echo $entry['211.3'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.4'] == '4'): ?>
                      <div class="tool-used"><?php echo $entry['211.4'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.5'] == '5'): ?>
                      <div class="tool-used"><?php echo $entry['211.5'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.6'] == '6'): ?>
                      <div class="tool-used"><?php echo $entry['211.6'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.7'] == '7'): ?>
                      <div class="tool-used"><?php echo $entry['211.7'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.8'] == '8'): ?>
                      <div class="tool-used"><?php echo $entry['211.8'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.9'] == '9'): ?>
                      <div class="tool-used"><?php echo $entry['211.9'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.11'] == '10'): ?>
                      <div class="tool-used"><?php echo $entry['211.11'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.12'] == '11'): ?>
                      <div class="tool-used"><?php echo $entry['211.12'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.13'] == '12'): ?>
                      <div class="tool-used"><?php echo $entry['211.13'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.14'] == '13'): ?>
                      <div class="tool-used"><?php echo $entry['211.14'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.15'] == '14'): ?>
                      <div class="tool-used"><?php echo $entry['211.15'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.16'] == '15'): ?>
                      <div class="tool-used"><?php echo $entry['211.16'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.17'] == '16'): ?>
                      <div class="tool-used"><?php echo $entry['211.17'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.18'] == '17'): ?>
                      <div class="tool-used"><?php echo $entry['211.18'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.19'] == '18'): ?>
                      <div class="tool-used"><?php echo $entry['211.19'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.21'] == '19'): ?>
                      <div class="tool-used"><?php echo $entry['211.21'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.22'] == '20'): ?>
                      <div class="tool-used"><?php echo $entry['211.22'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.23'] == '21'): ?>
                      <div class="tool-used"><?php echo $entry['211.23'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.24'] == '22'): ?>
                      <div class="tool-used"><?php echo $entry['211.24'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.25'] == '23'): ?>
                      <div class="tool-used"><?php echo $entry['211.25'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['211.26'] == '24'): ?>
                      <div class="tool-used"><?php echo $entry['211.26'] ?></div>
                    <?php endif; ?>
                  </div>
                  <div class="mobile-col">
                    <p>Accountability</p>
                  </div>
                  <div class="col-three">
                    <p class="stakeholders"><span class="lowercase">i</span>VET360: <span class="sh-name"><?php echo $entry['214'] ?></span></p>
                    <p class="stakeholders">Practice: <span class="sh-name"><?php echo $entry['215'] ?></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="plan-section plan-hover">
            <div class="top-bar">
              <div class="orange-title">
                <p>Priority/Objective</p>
              </div>
            </div>
            <div class="report priority-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title"><?php echo $entry['221'] ?></h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Metric</p>
                  </div>
                  <div class="col-two">
                    <p>Tools used</p>
                  </div>
                  <div class="col-three">
                    <p>Accountability</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Metric</p>
                  </div>
                  <div class="col-one">
                    <p><?php echo $entry['222'] ?></p>
                  </div>
                  <div class="mobile-col">
                    <p>Tools Used</p>
                  </div>
                  <div class="col-two tools-used">
                    <?php if ($entry['223.1'] == '1'): ?>
                      <div class="tool-used"><?php echo $entry['223.1'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.2'] == '2'): ?>
                      <div class="tool-used"><?php echo $entry['223.2'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.3'] == '3'): ?>
                      <div class="tool-used"><?php echo $entry['223.3'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.4'] == '4'): ?>
                      <div class="tool-used"><?php echo $entry['223.4'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.5'] == '5'): ?>
                      <div class="tool-used"><?php echo $entry['223.5'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.6'] == '6'): ?>
                      <div class="tool-used"><?php echo $entry['223.6'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.7'] == '7'): ?>
                      <div class="tool-used"><?php echo $entry['223.7'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.8'] == '8'): ?>
                      <div class="tool-used"><?php echo $entry['223.8'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.9'] == '9'): ?>
                      <div class="tool-used"><?php echo $entry['223.9'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.11'] == '10'): ?>
                      <div class="tool-used"><?php echo $entry['223.11'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.12'] == '11'): ?>
                      <div class="tool-used"><?php echo $entry['223.12'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.13'] == '12'): ?>
                      <div class="tool-used"><?php echo $entry['223.13'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.14'] == '13'): ?>
                      <div class="tool-used"><?php echo $entry['223.14'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.15'] == '14'): ?>
                      <div class="tool-used"><?php echo $entry['223.15'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.16'] == '15'): ?>
                      <div class="tool-used"><?php echo $entry['223.16'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.17'] == '16'): ?>
                      <div class="tool-used"><?php echo $entry['223.17'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.18'] == '17'): ?>
                      <div class="tool-used"><?php echo $entry['223.18'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.19'] == '18'): ?>
                      <div class="tool-used"><?php echo $entry['223.19'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.21'] == '19'): ?>
                      <div class="tool-used"><?php echo $entry['223.21'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.22'] == '20'): ?>
                      <div class="tool-used"><?php echo $entry['223.22'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.23'] == '21'): ?>
                      <div class="tool-used"><?php echo $entry['223.23'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.24'] == '22'): ?>
                      <div class="tool-used"><?php echo $entry['223.24'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.25'] == '23'): ?>
                      <div class="tool-used"><?php echo $entry['223.25'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['223.26'] == '24'): ?>
                      <div class="tool-used"><?php echo $entry['223.26'] ?></div>
                    <?php endif; ?>
                  </div>
                  <div class="mobile-col">
                    <p>Accountability</p>
                  </div>
                  <div class="col-three">
                    <p class="stakeholders"><span class="lowercase">i</span>VET360: <span class="sh-name"><?php echo $entry['224'] ?></span></p>
                    <p class="stakeholders">Practice: <span class="sh-name"><?php echo $entry['225'] ?></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="plan-section plan-hover">
            <div class="top-bar">
              <div class="orange-title">
                <p>Priority/Objective</p>
              </div>
            </div>
            <div class="report priority-report">
              <div class="row">
                <div class="row-inner no-border">
                  <h2 class="report-title"><?php echo $entry['227'] ?></h2>
                </div>
              </div>
              <div class="row first-row">
                <div class="row-inner no-border">
                  <div class="col-one">
                    <p>Metric</p>
                  </div>
                  <div class="col-two">
                    <p>Tools used</p>
                  </div>
                  <div class="col-three">
                    <p>Accountability</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="row-inner no-border">
                  <div class="mobile-col">
                    <p>Metric</p>
                  </div>
                  <div class="col-one">
                    <p><?php echo $entry['228'] ?></p>
                  </div>
                  <div class="mobile-col">
                    <p>Tools Used</p>
                  </div>
                  <div class="col-two tools-used">
                    <?php if ($entry['229.1'] == '1'): ?>
                      <div class="tool-used"><?php echo $entry['229.1'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.2'] == '2'): ?>
                      <div class="tool-used"><?php echo $entry['229.2'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.3'] == '3'): ?>
                      <div class="tool-used"><?php echo $entry['229.3'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.4'] == '4'): ?>
                      <div class="tool-used"><?php echo $entry['229.4'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.5'] == '5'): ?>
                      <div class="tool-used"><?php echo $entry['229.5'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.6'] == '6'): ?>
                      <div class="tool-used"><?php echo $entry['229.6'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.7'] == '7'): ?>
                      <div class="tool-used"><?php echo $entry['229.7'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.8'] == '8'): ?>
                      <div class="tool-used"><?php echo $entry['229.8'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.9'] == '9'): ?>
                      <div class="tool-used"><?php echo $entry['229.9'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.11'] == '10'): ?>
                      <div class="tool-used"><?php echo $entry['229.11'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.12'] == '11'): ?>
                      <div class="tool-used"><?php echo $entry['229.12'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.13'] == '12'): ?>
                      <div class="tool-used"><?php echo $entry['229.13'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.14'] == '13'): ?>
                      <div class="tool-used"><?php echo $entry['229.14'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.15'] == '14'): ?>
                      <div class="tool-used"><?php echo $entry['229.15'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.16'] == '15'): ?>
                      <div class="tool-used"><?php echo $entry['229.16'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.17'] == '16'): ?>
                      <div class="tool-used"><?php echo $entry['229.17'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.18'] == '17'): ?>
                      <div class="tool-used"><?php echo $entry['229.18'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.19'] == '18'): ?>
                      <div class="tool-used"><?php echo $entry['229.19'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.21'] == '19'): ?>
                      <div class="tool-used"><?php echo $entry['229.21'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.22'] == '20'): ?>
                      <div class="tool-used"><?php echo $entry['229.22'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.23'] == '21'): ?>
                      <div class="tool-used"><?php echo $entry['229.23'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.24'] == '22'): ?>
                      <div class="tool-used"><?php echo $entry['229.24'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.25'] == '23'): ?>
                      <div class="tool-used"><?php echo $entry['229.25'] ?></div>
                    <?php endif; ?>
                    <?php if ($entry['229.26'] == '24'): ?>
                      <div class="tool-used"><?php echo $entry['229.26'] ?></div>
                    <?php endif; ?>
                  </div>
                  <div class="mobile-col">
                    <p>Accountability</p>
                  </div>
                  <div class="col-three">
                    <p class="stakeholders"><span class="lowercase">i</span>VET360: <span class="sh-name"><?php echo $entry['230'] ?></span></p>
                    <p class="stakeholders">Practice: <span class="sh-name"><?php echo $entry['231'] ?></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php if ($entry['287'] == 'Yes'): ?>
            <div class="plan-section plan-hover">
              <div class="top-bar">
                <div class="orange-title">
                  <p>Priority/Objective</p>
                </div>
              </div>
              <div class="report priority-report">
                <div class="row">
                  <div class="row-inner no-border">
                    <h2 class="report-title"><?php echo $entry['233'] ?></h2>
                  </div>
                </div>
                <div class="row first-row">
                  <div class="row-inner no-border">
                    <div class="col-one">
                      <p>Metric</p>
                    </div>
                    <div class="col-two">
                      <p>Tools used</p>
                    </div>
                    <div class="col-three">
                      <p>Accountability</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="row-inner no-border">
                    <div class="mobile-col">
                      <p>Metric</p>
                    </div>
                    <div class="col-one">
                      <p><?php echo $entry['234'] ?></p>
                    </div>
                    <div class="mobile-col">
                      <p>Tools Used</p>
                    </div>
                    <div class="col-two tools-used">
                      <?php if ($entry['235.1'] == '1'): ?>
                      <div class="tool-used"><?php echo $entry['235.1'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.2'] == '2'): ?>
                        <div class="tool-used"><?php echo $entry['235.2'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.3'] == '3'): ?>
                        <div class="tool-used"><?php echo $entry['235.3'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.4'] == '4'): ?>
                        <div class="tool-used"><?php echo $entry['235.4'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.5'] == '5'): ?>
                        <div class="tool-used"><?php echo $entry['235.5'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.6'] == '6'): ?>
                        <div class="tool-used"><?php echo $entry['235.6'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.7'] == '7'): ?>
                        <div class="tool-used"><?php echo $entry['235.7'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.8'] == '8'): ?>
                        <div class="tool-used"><?php echo $entry['235.8'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.9'] == '9'): ?>
                        <div class="tool-used"><?php echo $entry['235.9'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.11'] == '10'): ?>
                        <div class="tool-used"><?php echo $entry['235.11'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.12'] == '11'): ?>
                        <div class="tool-used"><?php echo $entry['235.12'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.13'] == '12'): ?>
                        <div class="tool-used"><?php echo $entry['235.13'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.14'] == '13'): ?>
                        <div class="tool-used"><?php echo $entry['235.14'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.15'] == '14'): ?>
                        <div class="tool-used"><?php echo $entry['235.15'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.16'] == '15'): ?>
                        <div class="tool-used"><?php echo $entry['235.16'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.17'] == '16'): ?>
                        <div class="tool-used"><?php echo $entry['235.17'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.18'] == '17'): ?>
                        <div class="tool-used"><?php echo $entry['235.18'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.19'] == '18'): ?>
                        <div class="tool-used"><?php echo $entry['235.19'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.21'] == '19'): ?>
                        <div class="tool-used"><?php echo $entry['235.21'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.22'] == '20'): ?>
                        <div class="tool-used"><?php echo $entry['235.22'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.23'] == '21'): ?>
                        <div class="tool-used"><?php echo $entry['235.23'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.24'] == '22'): ?>
                        <div class="tool-used"><?php echo $entry['235.24'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.25'] == '23'): ?>
                        <div class="tool-used"><?php echo $entry['235.25'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['235.26'] == '24'): ?>
                        <div class="tool-used"><?php echo $entry['235.26'] ?></div>
                      <?php endif; ?>
                    </div>
                    <div class="mobile-col">
                      <p>Accountability</p>
                    </div>
                    <div class="col-three">
                      <p class="stakeholders"><span class="lowercase">i</span>VET360: <span class="sh-name"><?php echo $entry['236'] ?></span></p>
                      <p class="stakeholders">Practice: <span class="sh-name"><?php echo $entry['237'] ?></span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php if ($entry['288'] == 'Yes'): ?>
            <div class="plan-section plan-hover">
              <div class="top-bar">
                <div class="orange-title">
                  <p>Priority/Objective</p>
                </div>
              </div>
              <div class="report priority-report">
                <div class="row">
                  <div class="row-inner no-border">
                    <h2 class="report-title"><?php echo $entry['239'] ?></h2>
                  </div>
                </div>
                <div class="row first-row">
                  <div class="row-inner no-border">
                    <div class="col-one">
                      <p>Metric</p>
                    </div>
                    <div class="col-two">
                      <p>Tools used</p>
                    </div>
                    <div class="col-three">
                      <p>Accountability</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="row-inner no-border">
                    <div class="mobile-col">
                      <p>Metric</p>
                    </div>
                    <div class="col-one">
                      <p><?php echo $entry['240'] ?></p>
                    </div>
                    <div class="mobile-col">
                      <p>Tools Used</p>
                    </div>
                    <div class="col-two tools-used">
                      <?php if ($entry['241.1'] == '1'): ?>
                      <div class="tool-used"><?php echo $entry['241.1'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.2'] == '2'): ?>
                        <div class="tool-used"><?php echo $entry['241.2'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.3'] == '3'): ?>
                        <div class="tool-used"><?php echo $entry['241.3'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.4'] == '4'): ?>
                        <div class="tool-used"><?php echo $entry['241.4'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.5'] == '5'): ?>
                        <div class="tool-used"><?php echo $entry['241.5'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.6'] == '6'): ?>
                        <div class="tool-used"><?php echo $entry['241.6'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.7'] == '7'): ?>
                        <div class="tool-used"><?php echo $entry['241.7'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.8'] == '8'): ?>
                        <div class="tool-used"><?php echo $entry['241.8'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.9'] == '9'): ?>
                        <div class="tool-used"><?php echo $entry['241.9'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.11'] == '10'): ?>
                        <div class="tool-used"><?php echo $entry['241.11'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.12'] == '11'): ?>
                        <div class="tool-used"><?php echo $entry['241.12'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.13'] == '12'): ?>
                        <div class="tool-used"><?php echo $entry['241.13'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.14'] == '13'): ?>
                        <div class="tool-used"><?php echo $entry['241.14'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.15'] == '14'): ?>
                        <div class="tool-used"><?php echo $entry['241.15'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.16'] == '15'): ?>
                        <div class="tool-used"><?php echo $entry['241.16'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.17'] == '16'): ?>
                        <div class="tool-used"><?php echo $entry['241.17'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.18'] == '17'): ?>
                        <div class="tool-used"><?php echo $entry['241.18'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.19'] == '18'): ?>
                        <div class="tool-used"><?php echo $entry['241.19'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.21'] == '19'): ?>
                        <div class="tool-used"><?php echo $entry['241.21'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.22'] == '20'): ?>
                        <div class="tool-used"><?php echo $entry['241.22'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.23'] == '21'): ?>
                        <div class="tool-used"><?php echo $entry['241.23'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.24'] == '22'): ?>
                        <div class="tool-used"><?php echo $entry['241.24'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.25'] == '23'): ?>
                        <div class="tool-used"><?php echo $entry['241.25'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['241.26'] == '24'): ?>
                        <div class="tool-used"><?php echo $entry['241.26'] ?></div>
                      <?php endif; ?>
                    </div>
                    <div class="mobile-col">
                      <p>Accountability</p>
                    </div>
                    <div class="col-three">
                      <p class="stakeholders"><span class="lowercase">i</span>VET360: <span class="sh-name"><?php echo $entry['242'] ?></span></p>
                      <p class="stakeholders">Practice: <span class="sh-name"><?php echo $entry['243'] ?></span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php if ($entry['289'] == 'Yes'): ?>
            <div class="plan-section plan-hover">
              <div class="top-bar">
                <div class="orange-title">
                  <p>Priority/Objective</p>
                </div>
              </div>
              <div class="report priority-report">
                <div class="row">
                  <div class="row-inner no-border">
                    <h2 class="report-title"><?php echo $entry['245'] ?></h2>
                  </div>
                </div>
                <div class="row first-row">
                  <div class="row-inner no-border">
                    <div class="col-one">
                      <p>Metric</p>
                    </div>
                    <div class="col-two">
                      <p>Tools used</p>
                    </div>
                    <div class="col-three">
                      <p>Accountability</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="row-inner no-border">
                    <div class="mobile-col">
                      <p>Metric</p>
                    </div>
                    <div class="col-one">
                      <p><?php echo $entry['246'] ?></p>
                    </div>
                    <div class="mobile-col">
                      <p>Tools Used</p>
                    </div>
                    <div class="col-two tools-used">
                      <?php if ($entry['247.1'] == '1'): ?>
                      <div class="tool-used"><?php echo $entry['247.1'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.2'] == '2'): ?>
                        <div class="tool-used"><?php echo $entry['247.2'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.3'] == '3'): ?>
                        <div class="tool-used"><?php echo $entry['247.3'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.4'] == '4'): ?>
                        <div class="tool-used"><?php echo $entry['247.4'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.5'] == '5'): ?>
                        <div class="tool-used"><?php echo $entry['247.5'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.6'] == '6'): ?>
                        <div class="tool-used"><?php echo $entry['247.6'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.7'] == '7'): ?>
                        <div class="tool-used"><?php echo $entry['247.7'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.8'] == '8'): ?>
                        <div class="tool-used"><?php echo $entry['247.8'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.9'] == '9'): ?>
                        <div class="tool-used"><?php echo $entry['247.9'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.11'] == '10'): ?>
                        <div class="tool-used"><?php echo $entry['247.11'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.12'] == '11'): ?>
                        <div class="tool-used"><?php echo $entry['247.12'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.13'] == '12'): ?>
                        <div class="tool-used"><?php echo $entry['247.13'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.14'] == '13'): ?>
                        <div class="tool-used"><?php echo $entry['247.14'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.15'] == '14'): ?>
                        <div class="tool-used"><?php echo $entry['247.15'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.16'] == '15'): ?>
                        <div class="tool-used"><?php echo $entry['247.16'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.17'] == '16'): ?>
                        <div class="tool-used"><?php echo $entry['247.17'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.18'] == '17'): ?>
                        <div class="tool-used"><?php echo $entry['247.18'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.19'] == '18'): ?>
                        <div class="tool-used"><?php echo $entry['247.19'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.21'] == '19'): ?>
                        <div class="tool-used"><?php echo $entry['247.21'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.22'] == '20'): ?>
                        <div class="tool-used"><?php echo $entry['247.22'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.23'] == '21'): ?>
                        <div class="tool-used"><?php echo $entry['247.23'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.24'] == '22'): ?>
                        <div class="tool-used"><?php echo $entry['247.24'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.25'] == '23'): ?>
                        <div class="tool-used"><?php echo $entry['247.25'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['247.26'] == '24'): ?>
                        <div class="tool-used"><?php echo $entry['247.26'] ?></div>
                      <?php endif; ?>
                    </div>
                    <div class="mobile-col">
                      <p>Accountability</p>
                    </div>
                    <div class="col-three">
                      <p class="stakeholders"><span class="lowercase">i</span>VET360: <span class="sh-name"><?php echo $entry['248'] ?></span></p>
                      <p class="stakeholders">Practice: <span class="sh-name"><?php echo $entry['249'] ?></span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php if ($entry['290'] == 'Yes'): ?>
            <div class="plan-section plan-hover">
              <div class="top-bar">
                <div class="orange-title">
                  <p>Priority/Objective</p>
                </div>
              </div>
              <div class="report priority-report">
                <div class="row">
                  <div class="row-inner no-border">
                    <h2 class="report-title"><?php echo $entry['251'] ?></h2>
                  </div>
                </div>
                <div class="row first-row">
                  <div class="row-inner no-border">
                    <div class="col-one">
                      <p>Metric</p>
                    </div>
                    <div class="col-two">
                      <p>Tools used</p>
                    </div>
                    <div class="col-three">
                      <p>Accountability</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="row-inner no-border">
                    <div class="mobile-col">
                      <p>Metric</p>
                    </div>
                    <div class="col-one">
                      <p><?php echo $entry['252'] ?></p>
                    </div>
                    <div class="mobile-col">
                      <p>Tools Used</p>
                    </div>
                    <div class="col-two tools-used">
                      <?php if ($entry['253.1'] == '1'): ?>
                      <div class="tool-used"><?php echo $entry['253.1'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.2'] == '2'): ?>
                        <div class="tool-used"><?php echo $entry['253.2'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.3'] == '3'): ?>
                        <div class="tool-used"><?php echo $entry['253.3'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.4'] == '4'): ?>
                        <div class="tool-used"><?php echo $entry['253.4'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.5'] == '5'): ?>
                        <div class="tool-used"><?php echo $entry['253.5'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.6'] == '6'): ?>
                        <div class="tool-used"><?php echo $entry['253.6'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.7'] == '7'): ?>
                        <div class="tool-used"><?php echo $entry['253.7'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.8'] == '8'): ?>
                        <div class="tool-used"><?php echo $entry['253.8'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.9'] == '9'): ?>
                        <div class="tool-used"><?php echo $entry['253.9'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.11'] == '10'): ?>
                        <div class="tool-used"><?php echo $entry['253.11'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.12'] == '11'): ?>
                        <div class="tool-used"><?php echo $entry['253.12'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.13'] == '12'): ?>
                        <div class="tool-used"><?php echo $entry['253.13'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.14'] == '13'): ?>
                        <div class="tool-used"><?php echo $entry['253.14'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.15'] == '14'): ?>
                        <div class="tool-used"><?php echo $entry['253.15'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.16'] == '15'): ?>
                        <div class="tool-used"><?php echo $entry['253.16'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.17'] == '16'): ?>
                        <div class="tool-used"><?php echo $entry['253.17'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.18'] == '17'): ?>
                        <div class="tool-used"><?php echo $entry['253.18'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.19'] == '18'): ?>
                        <div class="tool-used"><?php echo $entry['253.19'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.21'] == '19'): ?>
                        <div class="tool-used"><?php echo $entry['253.21'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.22'] == '20'): ?>
                        <div class="tool-used"><?php echo $entry['253.22'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.23'] == '21'): ?>
                        <div class="tool-used"><?php echo $entry['253.23'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.24'] == '22'): ?>
                        <div class="tool-used"><?php echo $entry['253.24'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.25'] == '23'): ?>
                        <div class="tool-used"><?php echo $entry['253.25'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['253.26'] == '24'): ?>
                        <div class="tool-used"><?php echo $entry['253.26'] ?></div>
                      <?php endif; ?>
                    </div>
                    <div class="mobile-col">
                      <p>Accountability</p>
                    </div>
                    <div class="col-three">
                      <p class="stakeholders"><span class="lowercase">i</span>VET360: <span class="sh-name"><?php echo $entry['255'] ?></span></p>
                      <p class="stakeholders">Practice: <span class="sh-name"><?php echo $entry['254'] ?></span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php if ($entry['291'] == 'Yes'): ?>
            <div class="plan-section plan-hover">
              <div class="top-bar">
                <div class="orange-title">
                  <p>Priority/Objective</p>
                </div>
              </div>
              <div class="report priority-report">
                <div class="row">
                  <div class="row-inner no-border">
                    <h2 class="report-title"><?php echo $entry['295'] ?></h2>
                  </div>
                </div>
                <div class="row first-row">
                  <div class="row-inner no-border">
                    <div class="col-one">
                      <p>Metric</p>
                    </div>
                    <div class="col-two">
                      <p>Tools used</p>
                    </div>
                    <div class="col-three">
                      <p>Accountability</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="row-inner no-border">
                    <div class="mobile-col">
                      <p>Metric</p>
                    </div>
                    <div class="col-one">
                      <p><?php echo $entry['296'] ?></p>
                    </div>
                    <div class="mobile-col">
                      <p>Tools Used</p>
                    </div>
                    <div class="col-two tools-used">
                      <?php if ($entry['297.1'] == '1'): ?>
                      <div class="tool-used"><?php echo $entry['297.1'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.2'] == '2'): ?>
                        <div class="tool-used"><?php echo $entry['297.2'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.3'] == '3'): ?>
                        <div class="tool-used"><?php echo $entry['297.3'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.4'] == '4'): ?>
                        <div class="tool-used"><?php echo $entry['297.4'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.5'] == '5'): ?>
                        <div class="tool-used"><?php echo $entry['297.5'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.6'] == '6'): ?>
                        <div class="tool-used"><?php echo $entry['297.6'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.7'] == '7'): ?>
                        <div class="tool-used"><?php echo $entry['297.7'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.8'] == '8'): ?>
                        <div class="tool-used"><?php echo $entry['297.8'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.9'] == '9'): ?>
                        <div class="tool-used"><?php echo $entry['297.9'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.11'] == '10'): ?>
                        <div class="tool-used"><?php echo $entry['297.11'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.12'] == '11'): ?>
                        <div class="tool-used"><?php echo $entry['297.12'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.13'] == '12'): ?>
                        <div class="tool-used"><?php echo $entry['297.13'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.14'] == '13'): ?>
                        <div class="tool-used"><?php echo $entry['297.14'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.15'] == '14'): ?>
                        <div class="tool-used"><?php echo $entry['297.15'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.16'] == '15'): ?>
                        <div class="tool-used"><?php echo $entry['297.16'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.17'] == '16'): ?>
                        <div class="tool-used"><?php echo $entry['297.17'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.18'] == '17'): ?>
                        <div class="tool-used"><?php echo $entry['297.18'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.19'] == '18'): ?>
                        <div class="tool-used"><?php echo $entry['297.19'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.21'] == '19'): ?>
                        <div class="tool-used"><?php echo $entry['297.21'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.22'] == '20'): ?>
                        <div class="tool-used"><?php echo $entry['297.22'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.23'] == '21'): ?>
                        <div class="tool-used"><?php echo $entry['297.23'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.24'] == '22'): ?>
                        <div class="tool-used"><?php echo $entry['297.24'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.25'] == '23'): ?>
                        <div class="tool-used"><?php echo $entry['297.25'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['297.26'] == '24'): ?>
                        <div class="tool-used"><?php echo $entry['297.26'] ?></div>
                      <?php endif; ?>
                    </div>
                    <div class="mobile-col">
                      <p>Accountability</p>
                    </div>
                    <div class="col-three">
                      <p class="stakeholders"><span class="lowercase">i</span>VET360: <span class="sh-name"><?php echo $entry['299'] ?></span></p>
                      <p class="stakeholders">Practice: <span class="sh-name"><?php echo $entry['300'] ?></span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php if ($entry['292'] == 'Yes'): ?>
            <div class="plan-section plan-hover">
              <div class="top-bar">
                <div class="orange-title">
                  <p>Priority/Objective</p>
                </div>
              </div>
              <div class="report priority-report">
                <div class="row">
                  <div class="row-inner no-border">
                    <h2 class="report-title"><?php echo $entry['302'] ?></h2>
                  </div>
                </div>
                <div class="row first-row">
                  <div class="row-inner no-border">
                    <div class="col-one">
                      <p>Metric</p>
                    </div>
                    <div class="col-two">
                      <p>Tools used</p>
                    </div>
                    <div class="col-three">
                      <p>Accountability</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="row-inner no-border">
                    <div class="mobile-col">
                      <p>Metric</p>
                    </div>
                    <div class="col-one">
                      <p><?php echo $entry['303'] ?></p>
                    </div>
                    <div class="mobile-col">
                      <p>Tools Used</p>
                    </div>
                    <div class="col-two tools-used">
                      <?php if ($entry['304.1'] == '1'): ?>
                      <div class="tool-used"><?php echo $entry['304.1'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.2'] == '2'): ?>
                        <div class="tool-used"><?php echo $entry['304.2'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.3'] == '3'): ?>
                        <div class="tool-used"><?php echo $entry['304.3'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.4'] == '4'): ?>
                        <div class="tool-used"><?php echo $entry['304.4'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.5'] == '5'): ?>
                        <div class="tool-used"><?php echo $entry['304.5'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.6'] == '6'): ?>
                        <div class="tool-used"><?php echo $entry['304.6'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.7'] == '7'): ?>
                        <div class="tool-used"><?php echo $entry['304.7'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.8'] == '8'): ?>
                        <div class="tool-used"><?php echo $entry['304.8'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.9'] == '9'): ?>
                        <div class="tool-used"><?php echo $entry['304.9'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.11'] == '10'): ?>
                        <div class="tool-used"><?php echo $entry['304.11'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.12'] == '11'): ?>
                        <div class="tool-used"><?php echo $entry['304.12'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.13'] == '12'): ?>
                        <div class="tool-used"><?php echo $entry['304.13'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.14'] == '13'): ?>
                        <div class="tool-used"><?php echo $entry['304.14'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.15'] == '14'): ?>
                        <div class="tool-used"><?php echo $entry['304.15'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.16'] == '15'): ?>
                        <div class="tool-used"><?php echo $entry['304.16'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.17'] == '16'): ?>
                        <div class="tool-used"><?php echo $entry['304.17'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.18'] == '17'): ?>
                        <div class="tool-used"><?php echo $entry['304.18'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.19'] == '18'): ?>
                        <div class="tool-used"><?php echo $entry['304.19'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.21'] == '19'): ?>
                        <div class="tool-used"><?php echo $entry['304.21'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.22'] == '20'): ?>
                        <div class="tool-used"><?php echo $entry['304.22'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.23'] == '21'): ?>
                        <div class="tool-used"><?php echo $entry['304.23'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.24'] == '22'): ?>
                        <div class="tool-used"><?php echo $entry['304.24'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.25'] == '23'): ?>
                        <div class="tool-used"><?php echo $entry['304.25'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['304.26'] == '24'): ?>
                        <div class="tool-used"><?php echo $entry['304.26'] ?></div>
                      <?php endif; ?>
                    </div>
                    <div class="mobile-col">
                      <p>Accountability</p>
                    </div>
                    <div class="col-three">
                      <p class="stakeholders"><span class="lowercase">i</span>VET360: <span class="sh-name"><?php echo $entry['306'] ?></span></p>
                      <p class="stakeholders">Practice: <span class="sh-name"><?php echo $entry['307'] ?></span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php if ($entry['293'] == 'Yes'): ?>
            <div class="plan-section plan-hover" id="last-plan">
              <div class="top-bar">
                <div class="orange-title">
                  <p>Priority/Objective</p>
                </div>
              </div>
              <div class="report priority-report">
                <div class="row">
                  <div class="row-inner no-border">
                    <h2 class="report-title"><?php echo $entry['309'] ?></h2>
                  </div>
                </div>
                <div class="row first-row">
                  <div class="row-inner no-border">
                    <div class="col-one">
                      <p>Metric</p>
                    </div>
                    <div class="col-two">
                      <p>Tools used</p>
                    </div>
                    <div class="col-three">
                      <p>Accountability</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="row-inner no-border">
                    <div class="mobile-col">
                      <p>Metric</p>
                    </div>
                    <div class="col-one">
                      <p><?php echo $entry['310'] ?></p>
                    </div>
                    <div class="mobile-col">
                      <p>Tools Used</p>
                    </div>
                    <div class="col-two tools-used">
                      <?php if ($entry['311.1'] == '1'): ?>
                      <div class="tool-used"><?php echo $entry['311.1'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.2'] == '2'): ?>
                        <div class="tool-used"><?php echo $entry['311.2'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.3'] == '3'): ?>
                        <div class="tool-used"><?php echo $entry['311.3'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.4'] == '4'): ?>
                        <div class="tool-used"><?php echo $entry['311.4'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.5'] == '5'): ?>
                        <div class="tool-used"><?php echo $entry['311.5'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.6'] == '6'): ?>
                        <div class="tool-used"><?php echo $entry['311.6'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.7'] == '7'): ?>
                        <div class="tool-used"><?php echo $entry['311.7'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.8'] == '8'): ?>
                        <div class="tool-used"><?php echo $entry['311.8'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.9'] == '9'): ?>
                        <div class="tool-used"><?php echo $entry['311.9'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.11'] == '10'): ?>
                        <div class="tool-used"><?php echo $entry['311.11'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.12'] == '11'): ?>
                        <div class="tool-used"><?php echo $entry['311.12'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.13'] == '12'): ?>
                        <div class="tool-used"><?php echo $entry['311.13'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.14'] == '13'): ?>
                        <div class="tool-used"><?php echo $entry['311.14'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.15'] == '14'): ?>
                        <div class="tool-used"><?php echo $entry['311.15'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.16'] == '15'): ?>
                        <div class="tool-used"><?php echo $entry['311.16'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.17'] == '16'): ?>
                        <div class="tool-used"><?php echo $entry['311.17'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.18'] == '17'): ?>
                        <div class="tool-used"><?php echo $entry['311.18'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.19'] == '18'): ?>
                        <div class="tool-used"><?php echo $entry['311.19'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.21'] == '19'): ?>
                        <div class="tool-used"><?php echo $entry['311.21'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.22'] == '20'): ?>
                        <div class="tool-used"><?php echo $entry['311.22'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.23'] == '21'): ?>
                        <div class="tool-used"><?php echo $entry['311.23'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.24'] == '22'): ?>
                        <div class="tool-used"><?php echo $entry['311.24'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.25'] == '23'): ?>
                        <div class="tool-used"><?php echo $entry['311.25'] ?></div>
                      <?php endif; ?>
                      <?php if ($entry['311.26'] == '24'): ?>
                        <div class="tool-used"><?php echo $entry['311.26'] ?></div>
                      <?php endif; ?>
                    </div>
                    <div class="mobile-col">
                      <p>Accountability</p>
                    </div>
                    <div class="col-three">
                      <p class="stakeholders"><span class="lowercase">i</span>VET360: <span class="sh-name"><?php echo $entry['313'] ?></span></p>
                      <p class="stakeholders">Practice: <span class="sh-name"><?php echo $entry['314'] ?></span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
        <!-- PLAN END -->
      </div>
    </div>
    <!-- RESULTS END -->
    <div id="index-container" style="display: none;">
      <div id="index-inner">
        <div id="index-top-bar">
          <p id="index-title">Tool Index</p>
          <div id="index-btn" class="teal-btn">
            <p>Open Index</p>
            <i class="fas fa-caret-up"></i>
          </div>
        </div>
        <div id="index" style="max-height: 0;">
          <ul class="index-col">
            <li class="index-item" data-id="1">1. ATC Analysis & Communication <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="2">2. Budgeting <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="3">3. Call Tracking & Training <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="4">4. Chart of Accounts Audit <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="5">5. Culture Assesment & Communication <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="6">6. Dashboard w/ Benchmarks <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
          </ul>
          <ul class="index-col">
            <li class="index-item" data-id="7">7. location Intelligence Report <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="8">8. Financial/Inventory Safeguarding <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="9">9. HR Protocol Database <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="10">10. Database Marketing <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="11">11. Marketing Plan <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="12">12. New Hire & Ongoing Training <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
          </ul>
          <ul class="index-col">
            <li class="index-item" data-id="13">13. Online Marketing Campaign(s) <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="14">14. Payroll & Wage Analysis <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="15">15. Pet Insurance <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="16">16. Practice Valuation <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="17">17. Learningvet.com <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="18">18. Staff Survey <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
          </ul>
          <ul class="index-col">
            <li class="index-item" data-id="19">19. Social Media Knowledge Base <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="20">20. SWOT Analysis <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="21">21. Treatment Plans & Presentation <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="22">22. Variable Expense Review <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="23">23. Website Development/Management <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
            <li class="index-item" data-id="24">24. Optimized Reminder Platform <img class="check" src="/wp-content/uploads/2021/01/index-checkmark.svg" alt="Minus mark" /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php
  return ob_get_clean();
}
add_shortcode('poa_results','poa_results');

function plugin_assets() {
  wp_enqueue_script( 'poa-report-js',  plugin_dir_url( __FILE__ ) . '/js/poa-report.js', array( 'jquery' ) );
  wp_enqueue_style( 'poa-report-css',  plugin_dir_url( __FILE__ ) . '/css/poa-report.css' );
}

add_action('wp_enqueue_scripts', 'plugin_assets');
