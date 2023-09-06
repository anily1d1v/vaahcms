# vaahcms


   <VhField label="Amount">
                    <InputNumber class="w-full"
                               name="books-name"
                               data-testid="books-name"
                                 @input="store.enterAmount($event)"
                                 v-model="store.item.amount"
                                 minFractionDigits="2"
                    />
                </VhField>


                <VhField label="Tax">
                <InputNumber class="w-full"
                           name="books-name"
                           data-testid="books-name"
                           v-model="store.item.tax"/>
            </VhField>


                <VhField label="Total Amount">
                <InputNumber class="w-full"
                           name="books-name"
                           data-testid="books-name"
                           @input="store.enterTotalAmount($event)"
                           v-model="store.item.total_amount"
                           minFractionDigits="2"
                />
            </VhField>

 //---------------------------------------------------------------------
        enterAmount(value) {
            const numericValue = parseFloat(value?.value);

            // Check if the numericValue is a valid number
            if (!isNaN(numericValue)) {
                const tax = numericValue * 0.1;
                const totalAmount = numericValue + tax;

                const formattedTax = tax.toFixed(2);
                const formattedTotalAmount = totalAmount.toFixed(2);
                this.item.tax = formattedTax;
                this.item.total_amount = formattedTotalAmount;
            } else {
                this.item.tax = null;
                this.item.total_amount = null;
            }
        },
        //---------------------------------------------------------------------
        enterTotalAmount(value) {
            const numericValue = parseFloat(value?.value);
            if (!isNaN(numericValue)) {
                const tax = numericValue * 9.09/100;
                const amount = numericValue - tax;

                const formattedTax = tax.toFixed(2);
                const formattedAmount = amount.toFixed(2);

                this.item.tax = formattedTax;
                this.item.amount = formattedAmount;
            } else {
                this.item.tax = null;
                this.item.amount = null;
            }
        }
