<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * User stories
     * As a user I would like to book an appointment to cut my hair
     * As a user I would like to select the date and see all available slots for this day
     * As a barber I want to have a 5 minute break between my appointments so as to be able to clean up
     * As a barber shop owner I want to show slots for the next 7 days, every 10 minutes, from 08:00-20:00
     * As a barber shop owner I want to configure a lunch break from 13:00-14:00
     * As a barber shop owner I want that only 3 clients book themselve in in one time slot
     * As a barber shop owner I want not to get invalid bookings: for booked out slots, out of range, disabled time validation should fail
     * As a barber shop owner I want to tweak all those variables as I wish
     * As a barber shop owner I wannt to create one or multiple breaks (lunch, cleaning, ...), for example a lunch break from 12:00-13:00 and a cleaning break from 15:00-16:00
     * As a barber shop owner I would like to specify times when I dont work, for example on public holidays
     * As a barber shop owner I want to create multiple different scheduling events with totally different parameters (hair cut, hair coloring, whatever)
     * As a barber shop owner I want those different events to be totally separate
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
