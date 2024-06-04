import { AxiosError, AxiosResponse } from "axios";

import useSWRMutation from "swr/mutation";

import Button from "../atoms/Button";
import ImageInput from "../atoms/ImageInput";

import Input from "../molecules/Input";
import Textarea from "../molecules/Textarea";

import { postData } from "../../libs/PostApiClient";

import { DataType } from "../../types/dataType";

import { useRecoilValue } from "recoil";

import { sampleDataState } from "../../stores/dataState";


const PictureFom = () => {


  const FormData = useRecoilValue(sampleDataState)

  const { trigger, isMutating, data, error } = useSWRMutation<
    AxiosResponse<DataType>,
    AxiosError
  >("api/", postData);

  const handleDataPicture = () => {
    trigger
  }

  return (
    <div className="bg-white rounded-lg">
      <form onSubmit={() => trigger()} className="space-y-2">
        <Input />
        <Textarea />
        <ImageInput />
        <Button className={"bg-purple-300"}>ADD!!</Button>
      </form>
    </div>
  );
};

export default PictureFom;
