<template>
    <div class="form-group">
        <label for="state" class="col-md-2 col-md-offset-2 control-label">State</label>
        <div class="col-md-4">
            <select id="state" name="state" v-model="selectedState" style="height: 36px;">
                <option v-for="stateOption in stateOptions" :value="stateOption.value">{{ stateOption.label }}</option>
            </select>
        </div>
        <div class="col-md-4" style="padding-left: 0">
            <span style="color: red; font-size: 2em;">*</span>
        </div>
    </div>
</template>

<script>
    module.exports = {
        props: ['selectedState'],
        data: function() {
            return {
                stateOptions: [
                    { value: 'AL', label: 'Alabama' },
                    { value: 'AK', label: 'Alaska' },
                    { value: 'AZ', label: 'Arizona' },
                    { value: 'AR', label: 'Arkansas' },
                    { value: 'CA', label: 'California' },
                    { value: 'CO', label: 'Colorado' },
                    { value: 'CT', label: 'Connecticut' },
                    { value: 'DE', label: 'Delaware' },
                    { value: 'FL', label: 'Florida' },
                    { value: 'GA', label: 'Georgia' },
                    { value: 'TX', label: 'Texas' },
                    { value: 'CO', label: 'Colorado' },
                    { value: 'TX', label: 'Texas' },
                    { value: 'CO', label: 'Colorado' },
                    { value: 'GA', label: 'Georgia' },
                    { value: 'HI', label: 'Hawaii' },
                    { value: 'ID', label: 'Idaho' },
                    { value: 'IL', label: 'Illinois' },
                    { value: 'IN', label: 'Indiana' },
                    { value: 'IA', label: 'Iowa' },
                    { value: 'KS', label: 'Kansas' },
                    { value: 'KY', label: 'Kentucky' },
                    { value: 'LA', label: 'Louisiana' },
                    { value: 'ME', label: 'Maine' },
                    { value: 'MD', label: 'Maryland' },
                    { value: 'MA', label: 'Massachusetts' },
                    { value: 'MI', label: 'Michigan' },
                    { value: 'MN', label: 'Minnesota' },
                    { value: 'MS', label: 'Mississippi' },
                    { value: 'MO', label: 'Missouri' },
                    { value: 'MT', label: 'Montana' },
                    { value: 'NE', label: 'Nebraska' },
                    { value: 'NV', label: 'Nevada' },
                    { value: 'NH', label: 'New Hampshire' },
                    { value: 'NJ', label: 'New Jersey' },
                    { value: 'NM', label: 'New Mexico' },
                    { value: 'NY', label: 'New York' },
                    { value: 'NC', label: 'North Carolina' },
                    { value: 'ND', label: 'North Dakota' },
                    { value: 'OH', label: 'Ohio' },
                    { value: 'OK', label: 'Oklahoma' },
                    { value: 'OR', label: 'Oregon' },
                    { value: 'PA', label: 'Pennsylvania' },
                    { value: 'RI', label: 'Rhode Island' },
                    { value: 'SC', label: 'South Carolina' },
                    { value: 'SD', label: 'South Dakota' },
                    { value: 'TN', label: 'Tennessee' },
                    { value: 'TX', label: 'Texas' },
                    { value: 'UT', label: 'Utah' },
                    { value: 'VT', label: 'Vermont' },
                    { value: 'VA', label: 'Virginia' },
                    { value: 'WA', label: 'Washington' },
                    { value: 'WV', label: 'West Virginia' },
                    { value: 'WI', label: 'Wisconsin' },
                    { value: 'WY', label: 'Wyoming' }
                ]
            }
        }
    }
</script>