<!-- This file is part of the OPNsense project.

   Copyright (c) 2024 OPNsense Contributors
   All rights reserved.

   Redistribution and use in source and binary forms, with or without
   modification, are permitted provided that the following conditions are met:

   1. Redistributions of source code must retain the above copyright notice,
      this list of conditions and the following disclaimer.

   2. Redistributions in binary form must reproduce the above copyright notice,
      this list of conditions and the following disclaimer in the documentation
      and/or other materials provided with the distribution.

   THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
   INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
   AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
   AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
   OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
   SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
   INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
   CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
   POSSIBILITY OF SUCH DAMAGE.

-->

<div class="tab-content">
    <div id="general" class="tab-pane fade in active">
        <div class="content-box">
            <div class="content-box-main">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <td style="width:22%"><strong>{{ form.getChild('general.enabled').label }}</strong></td>
                            <td style="width:78%">
                                {{ form.getChild('general.enabled') }}
                                <div class="hidden" data-for="general.enabled">
                                    {{ form.getChild('general.enabled').help }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>{{ form.getChild('general.log_level').label }}</strong></td>
                            <td>
                                {{ form.getChild('general.log_level') }}
                                <div class="hidden" data-for="general.log_level">
                                    {{ form.getChild('general.log_level').help }}
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
