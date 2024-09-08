def calculate_emi(principal, annual_interest_rate, years):
    # Convert annual interest rate to monthly and calculate number of monthly payments
    monthly_interest_rate = annual_interest_rate / (12 * 100)
    num_payments = years * 12

    # Calculate monthly EMI using the formula for a fixed-rate mortgage
    emi = (principal * monthly_interest_rate) / (1 - (1 + monthly_interest_rate) ** -num_payments)

    return emi

def generate_amortization_schedule(principal, annual_interest_rate, years):
    monthly_interest_rate = annual_interest_rate / (12 * 100)
    num_payments = years * 12

    emi = calculate_emi(principal, annual_interest_rate, years)

    print("\nAmortization Schedule:")
    print("{:<10} {:<15} {:<15} {:<15}".format("Payment#", "Principal", "Interest", "Balance"))

    remaining_balance = principal
    for payment_number in range(1, num_payments + 1):
        interest_payment = remaining_balance * monthly_interest_rate
        principal_payment = emi - interest_payment
        remaining_balance -= principal_payment

        print("{:<10} {:<15.2f} {:<15.2f} {:<15.2f}".format(payment_number, principal_payment, interest_payment, remaining_balance))

# Example usage:
loan_amount = float(input("Enter the loan amount: "))
interest_rate = float(input("Enter the annual interest rate (in percentage): "))
loan_years = int(input("Enter the number of years for the loan: "))

monthly_emi = calculate_emi(loan_amount, interest_rate, loan_years)
total_payment = monthly_emi * loan_years * 12

print("\nLoan Summary:")
print(f"Loan Amount: ${loan_amount:.2f}")
print(f"Annual Interest Rate: {interest_rate}%")
print(f"Number of Years: {loan_years}")

print("\nMonthly EMI: ${:.2f}".format(monthly_emi))
print("Total Payment: ${:.2f}".format(total_payment))

generate_amortization_schedule(loan_amount, interest_rate, loan_years)
